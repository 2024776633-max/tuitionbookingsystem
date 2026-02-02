<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subjects Model
 *
 * @method \App\Model\Entity\Subject newEmptyEntity()
 * @method \App\Model\Entity\Subject newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Subject> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Subject get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Subject findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Subject patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Subject> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Subject|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Subject saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Subject>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Subject> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SubjectsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('subjects');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
		$this->addBehavior('AuditStash.AuditLog');
		$this->addBehavior('Search.Search');
		$this->searchManager()
			->value('id')
				->add('search', 'Search.Like', [
					//'before' => true,
					//'after' => true,
					'fieldMode' => 'OR',
					'multiValue' => true,
					'multiValueSeparator' => '|',
					'comparison' => 'LIKE',
					'wildcardAny' => '*',
					'wildcardOne' => '?',
					'fields' => ['id'],
				]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('subject_name')
            ->maxLength('subject_name', 100)
            ->requirePresence('subject_name', 'create')
            ->notEmptyString('subject_name');

        $validator
            ->scalar('level')
            ->maxLength('level', 50)
            ->requirePresence('level', 'create')
            ->notEmptyString('level');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }
}

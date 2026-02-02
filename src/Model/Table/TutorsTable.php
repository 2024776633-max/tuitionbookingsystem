<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tutors Model
 *
 * @method \App\Model\Entity\Tutor newEmptyEntity()
 * @method \App\Model\Entity\Tutor newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Tutor> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tutor get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Tutor findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Tutor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Tutor> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tutor|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Tutor saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Tutor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tutor>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tutor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tutor> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tutor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tutor>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Tutor>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Tutor> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TutorsTable extends Table
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

        $this->setTable('tutors');
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
            ->scalar('tutor_name')
            ->maxLength('tutor_name', 100)
            ->requirePresence('tutor_name', 'create')
            ->notEmptyString('tutor_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('subject_name')
            ->maxLength('subject_name', 100)
            ->requirePresence('subject_name', 'create')
            ->notEmptyString('subject_name');

        $validator
            ->scalar('availability')
            ->maxLength('availability', 50)
            ->requirePresence('availability', 'create')
            ->notEmptyString('availability');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        return $validator;
    }
}

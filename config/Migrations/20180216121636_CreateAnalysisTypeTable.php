<?php
use Migrations\AbstractMigration;

class CreateAnalysisTypeTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('analysis_type');
        
         $table->addColumn('name', 'string', [
            'null' => true,
            'default' => null,
        ]);
        $table->addColumn('description', 'string', [
            'null' => true,
            'default' => null,
        ]);
        $table->addColumn('created_at', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP'
        ]);

        $table->create();
    }
}

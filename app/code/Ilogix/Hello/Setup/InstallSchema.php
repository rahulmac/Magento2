<?php
namespace Ilogix\Hello\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        // TODO: Implement install() method.

        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('mac_employee_data')
        )->addColumn(
            'employee_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
            'Employee Id'
        )->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Employee Name'
        )->setComment(
            'Employee Table'
        );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
?>
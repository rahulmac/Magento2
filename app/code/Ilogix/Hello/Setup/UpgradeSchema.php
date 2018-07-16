<?php
namespace Ilogix\Hello\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
{
    if (version_compare($context->getVersion(), "1.0.1", "<")) {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('ilogix_employee_data')
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
}
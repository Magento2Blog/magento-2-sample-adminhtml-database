<?php
namespace Magemaster\AdminSample\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
          $table = $setup->getConnection()
              ->newTable($setup->getTable('adminsample_payment_methods'))
              ->addColumn(
                  'id',
                  \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                  null,
                  ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                  'ID'
              )
              ->addColumn(
                  'method',
                  \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                  255,
                  ['nullable' => false, 'default' => ''],
                    'Payment Method'
              )
              ->addColumn(
                  'allowed',
                  \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                  null,
                  ['nullable' => false, 'default' => 0],
                  'Allowed'
              )
              ->setComment("Adminsample payment methods table");
          $setup->getConnection()->createTable($table);
      }
}
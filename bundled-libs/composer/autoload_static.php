<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcbda25b16bb8365467298ce193f0f30c
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'voku\\cache\\' => 11,
        ),
        'Z' => 
        array (
            'Zend\\Stdlib\\' => 12,
            'Zend\\Db\\' => 8,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
        ),
        'K' => 
        array (
            'Katzgrau\\KLogger\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'voku\\cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache',
        ),
        'Zend\\Stdlib\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-db/src',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Katzgrau\\KLogger\\' => 
        array (
            0 => __DIR__ . '/..' . '/katzgrau/klogger/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
    );

    public static $classMap = array (
        'Katzgrau\\KLogger\\Logger' => __DIR__ . '/..' . '/katzgrau/klogger/src/Logger.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\SimpleCache\\CacheException' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheException.php',
        'Psr\\SimpleCache\\CacheInterface' => __DIR__ . '/..' . '/psr/simple-cache/src/CacheInterface.php',
        'Psr\\SimpleCache\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/simple-cache/src/InvalidArgumentException.php',
        'Zend\\Db\\Adapter\\Adapter' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Adapter.php',
        'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/AdapterAbstractServiceFactory.php',
        'Zend\\Db\\Adapter\\AdapterAwareInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/AdapterAwareInterface.php',
        'Zend\\Db\\Adapter\\AdapterAwareTrait' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/AdapterAwareTrait.php',
        'Zend\\Db\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/AdapterInterface.php',
        'Zend\\Db\\Adapter\\AdapterServiceFactory' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/AdapterServiceFactory.php',
        'Zend\\Db\\Adapter\\Driver\\AbstractConnection' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/AbstractConnection.php',
        'Zend\\Db\\Adapter\\Driver\\ConnectionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/ConnectionInterface.php',
        'Zend\\Db\\Adapter\\Driver\\DriverInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/DriverInterface.php',
        'Zend\\Db\\Adapter\\Driver\\Feature\\AbstractFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Feature/AbstractFeature.php',
        'Zend\\Db\\Adapter\\Driver\\Feature\\DriverFeatureInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Feature/DriverFeatureInterface.php',
        'Zend\\Db\\Adapter\\Driver\\IbmDb2\\Connection' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/IbmDb2/Connection.php',
        'Zend\\Db\\Adapter\\Driver\\IbmDb2\\IbmDb2' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/IbmDb2/IbmDb2.php',
        'Zend\\Db\\Adapter\\Driver\\IbmDb2\\Result' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/IbmDb2/Result.php',
        'Zend\\Db\\Adapter\\Driver\\IbmDb2\\Statement' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/IbmDb2/Statement.php',
        'Zend\\Db\\Adapter\\Driver\\Mysqli\\Connection' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Mysqli/Connection.php',
        'Zend\\Db\\Adapter\\Driver\\Mysqli\\Mysqli' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Mysqli/Mysqli.php',
        'Zend\\Db\\Adapter\\Driver\\Mysqli\\Result' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Mysqli/Result.php',
        'Zend\\Db\\Adapter\\Driver\\Mysqli\\Statement' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Mysqli/Statement.php',
        'Zend\\Db\\Adapter\\Driver\\Oci8\\Connection' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Oci8/Connection.php',
        'Zend\\Db\\Adapter\\Driver\\Oci8\\Feature\\RowCounter' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Oci8/Feature/RowCounter.php',
        'Zend\\Db\\Adapter\\Driver\\Oci8\\Oci8' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Oci8/Oci8.php',
        'Zend\\Db\\Adapter\\Driver\\Oci8\\Result' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Oci8/Result.php',
        'Zend\\Db\\Adapter\\Driver\\Oci8\\Statement' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Oci8/Statement.php',
        'Zend\\Db\\Adapter\\Driver\\Pdo\\Connection' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pdo/Connection.php',
        'Zend\\Db\\Adapter\\Driver\\Pdo\\Feature\\OracleRowCounter' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pdo/Feature/OracleRowCounter.php',
        'Zend\\Db\\Adapter\\Driver\\Pdo\\Feature\\SqliteRowCounter' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pdo/Feature/SqliteRowCounter.php',
        'Zend\\Db\\Adapter\\Driver\\Pdo\\Pdo' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pdo/Pdo.php',
        'Zend\\Db\\Adapter\\Driver\\Pdo\\Result' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pdo/Result.php',
        'Zend\\Db\\Adapter\\Driver\\Pdo\\Statement' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pdo/Statement.php',
        'Zend\\Db\\Adapter\\Driver\\Pgsql\\Connection' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pgsql/Connection.php',
        'Zend\\Db\\Adapter\\Driver\\Pgsql\\Pgsql' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pgsql/Pgsql.php',
        'Zend\\Db\\Adapter\\Driver\\Pgsql\\Result' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pgsql/Result.php',
        'Zend\\Db\\Adapter\\Driver\\Pgsql\\Statement' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Pgsql/Statement.php',
        'Zend\\Db\\Adapter\\Driver\\ResultInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/ResultInterface.php',
        'Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Connection' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Sqlsrv/Connection.php',
        'Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Exception\\ErrorException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Sqlsrv/Exception/ErrorException.php',
        'Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Sqlsrv/Exception/ExceptionInterface.php',
        'Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Result' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Sqlsrv/Result.php',
        'Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Sqlsrv' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Sqlsrv/Sqlsrv.php',
        'Zend\\Db\\Adapter\\Driver\\Sqlsrv\\Statement' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/Sqlsrv/Statement.php',
        'Zend\\Db\\Adapter\\Driver\\StatementInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Driver/StatementInterface.php',
        'Zend\\Db\\Adapter\\Exception\\ErrorException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Exception/ErrorException.php',
        'Zend\\Db\\Adapter\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Exception/ExceptionInterface.php',
        'Zend\\Db\\Adapter\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Exception/InvalidArgumentException.php',
        'Zend\\Db\\Adapter\\Exception\\InvalidConnectionParametersException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Exception/InvalidConnectionParametersException.php',
        'Zend\\Db\\Adapter\\Exception\\InvalidQueryException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Exception/InvalidQueryException.php',
        'Zend\\Db\\Adapter\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Exception/RuntimeException.php',
        'Zend\\Db\\Adapter\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Exception/UnexpectedValueException.php',
        'Zend\\Db\\Adapter\\ParameterContainer' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/ParameterContainer.php',
        'Zend\\Db\\Adapter\\Platform\\AbstractPlatform' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/AbstractPlatform.php',
        'Zend\\Db\\Adapter\\Platform\\IbmDb2' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/IbmDb2.php',
        'Zend\\Db\\Adapter\\Platform\\Mysql' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/Mysql.php',
        'Zend\\Db\\Adapter\\Platform\\Oracle' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/Oracle.php',
        'Zend\\Db\\Adapter\\Platform\\PlatformInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/PlatformInterface.php',
        'Zend\\Db\\Adapter\\Platform\\Postgresql' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/Postgresql.php',
        'Zend\\Db\\Adapter\\Platform\\Sql92' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/Sql92.php',
        'Zend\\Db\\Adapter\\Platform\\SqlServer' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/SqlServer.php',
        'Zend\\Db\\Adapter\\Platform\\Sqlite' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Platform/Sqlite.php',
        'Zend\\Db\\Adapter\\Profiler\\Profiler' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Profiler/Profiler.php',
        'Zend\\Db\\Adapter\\Profiler\\ProfilerAwareInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Profiler/ProfilerAwareInterface.php',
        'Zend\\Db\\Adapter\\Profiler\\ProfilerInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/Profiler/ProfilerInterface.php',
        'Zend\\Db\\Adapter\\StatementContainer' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/StatementContainer.php',
        'Zend\\Db\\Adapter\\StatementContainerInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Adapter/StatementContainerInterface.php',
        'Zend\\Db\\ConfigProvider' => __DIR__ . '/..' . '/zendframework/zend-db/src/ConfigProvider.php',
        'Zend\\Db\\Exception\\ErrorException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Exception/ErrorException.php',
        'Zend\\Db\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Exception/ExceptionInterface.php',
        'Zend\\Db\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Exception/InvalidArgumentException.php',
        'Zend\\Db\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Exception/RuntimeException.php',
        'Zend\\Db\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Exception/UnexpectedValueException.php',
        'Zend\\Db\\Metadata\\Metadata' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Metadata.php',
        'Zend\\Db\\Metadata\\MetadataInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/MetadataInterface.php',
        'Zend\\Db\\Metadata\\Object\\AbstractTableObject' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Object/AbstractTableObject.php',
        'Zend\\Db\\Metadata\\Object\\ColumnObject' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Object/ColumnObject.php',
        'Zend\\Db\\Metadata\\Object\\ConstraintKeyObject' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Object/ConstraintKeyObject.php',
        'Zend\\Db\\Metadata\\Object\\ConstraintObject' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Object/ConstraintObject.php',
        'Zend\\Db\\Metadata\\Object\\TableObject' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Object/TableObject.php',
        'Zend\\Db\\Metadata\\Object\\TriggerObject' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Object/TriggerObject.php',
        'Zend\\Db\\Metadata\\Object\\ViewObject' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Object/ViewObject.php',
        'Zend\\Db\\Metadata\\Source\\AbstractSource' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Source/AbstractSource.php',
        'Zend\\Db\\Metadata\\Source\\Factory' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Source/Factory.php',
        'Zend\\Db\\Metadata\\Source\\MysqlMetadata' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Source/MysqlMetadata.php',
        'Zend\\Db\\Metadata\\Source\\OracleMetadata' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Source/OracleMetadata.php',
        'Zend\\Db\\Metadata\\Source\\PostgresqlMetadata' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Source/PostgresqlMetadata.php',
        'Zend\\Db\\Metadata\\Source\\SqlServerMetadata' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Source/SqlServerMetadata.php',
        'Zend\\Db\\Metadata\\Source\\SqliteMetadata' => __DIR__ . '/..' . '/zendframework/zend-db/src/Metadata/Source/SqliteMetadata.php',
        'Zend\\Db\\Module' => __DIR__ . '/..' . '/zendframework/zend-db/src/Module.php',
        'Zend\\Db\\ResultSet\\AbstractResultSet' => __DIR__ . '/..' . '/zendframework/zend-db/src/ResultSet/AbstractResultSet.php',
        'Zend\\Db\\ResultSet\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/ResultSet/Exception/ExceptionInterface.php',
        'Zend\\Db\\ResultSet\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-db/src/ResultSet/Exception/InvalidArgumentException.php',
        'Zend\\Db\\ResultSet\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-db/src/ResultSet/Exception/RuntimeException.php',
        'Zend\\Db\\ResultSet\\HydratingResultSet' => __DIR__ . '/..' . '/zendframework/zend-db/src/ResultSet/HydratingResultSet.php',
        'Zend\\Db\\ResultSet\\ResultSet' => __DIR__ . '/..' . '/zendframework/zend-db/src/ResultSet/ResultSet.php',
        'Zend\\Db\\ResultSet\\ResultSetInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/ResultSet/ResultSetInterface.php',
        'Zend\\Db\\RowGateway\\AbstractRowGateway' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/AbstractRowGateway.php',
        'Zend\\Db\\RowGateway\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/Exception/ExceptionInterface.php',
        'Zend\\Db\\RowGateway\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/Exception/InvalidArgumentException.php',
        'Zend\\Db\\RowGateway\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/Exception/RuntimeException.php',
        'Zend\\Db\\RowGateway\\Feature\\AbstractFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/Feature/AbstractFeature.php',
        'Zend\\Db\\RowGateway\\Feature\\FeatureSet' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/Feature/FeatureSet.php',
        'Zend\\Db\\RowGateway\\RowGateway' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/RowGateway.php',
        'Zend\\Db\\RowGateway\\RowGatewayInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/RowGateway/RowGatewayInterface.php',
        'Zend\\Db\\Sql\\AbstractExpression' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/AbstractExpression.php',
        'Zend\\Db\\Sql\\AbstractPreparableSql' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/AbstractPreparableSql.php',
        'Zend\\Db\\Sql\\AbstractSql' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/AbstractSql.php',
        'Zend\\Db\\Sql\\Combine' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Combine.php',
        'Zend\\Db\\Sql\\Ddl\\AlterTable' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/AlterTable.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\AbstractLengthColumn' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/AbstractLengthColumn.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\AbstractPrecisionColumn' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/AbstractPrecisionColumn.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\AbstractTimestampColumn' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/AbstractTimestampColumn.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\BigInteger' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/BigInteger.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Binary' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Binary.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Blob' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Blob.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Boolean' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Boolean.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Char' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Char.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Column' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Column.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\ColumnInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/ColumnInterface.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Date' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Date.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Datetime' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Datetime.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Decimal' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Decimal.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Float' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Float.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Floating' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Floating.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Integer' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Integer.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Text' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Text.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Time' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Time.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Timestamp' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Timestamp.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Varbinary' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Varbinary.php',
        'Zend\\Db\\Sql\\Ddl\\Column\\Varchar' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Column/Varchar.php',
        'Zend\\Db\\Sql\\Ddl\\Constraint\\AbstractConstraint' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Constraint/AbstractConstraint.php',
        'Zend\\Db\\Sql\\Ddl\\Constraint\\Check' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Constraint/Check.php',
        'Zend\\Db\\Sql\\Ddl\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Constraint/ConstraintInterface.php',
        'Zend\\Db\\Sql\\Ddl\\Constraint\\ForeignKey' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Constraint/ForeignKey.php',
        'Zend\\Db\\Sql\\Ddl\\Constraint\\PrimaryKey' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Constraint/PrimaryKey.php',
        'Zend\\Db\\Sql\\Ddl\\Constraint\\UniqueKey' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Constraint/UniqueKey.php',
        'Zend\\Db\\Sql\\Ddl\\CreateTable' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/CreateTable.php',
        'Zend\\Db\\Sql\\Ddl\\DropTable' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/DropTable.php',
        'Zend\\Db\\Sql\\Ddl\\Index\\AbstractIndex' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Index/AbstractIndex.php',
        'Zend\\Db\\Sql\\Ddl\\Index\\Index' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/Index/Index.php',
        'Zend\\Db\\Sql\\Ddl\\SqlInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Ddl/SqlInterface.php',
        'Zend\\Db\\Sql\\Delete' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Delete.php',
        'Zend\\Db\\Sql\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Exception/ExceptionInterface.php',
        'Zend\\Db\\Sql\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Exception/InvalidArgumentException.php',
        'Zend\\Db\\Sql\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Exception/RuntimeException.php',
        'Zend\\Db\\Sql\\Expression' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Expression.php',
        'Zend\\Db\\Sql\\ExpressionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/ExpressionInterface.php',
        'Zend\\Db\\Sql\\Having' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Having.php',
        'Zend\\Db\\Sql\\Insert' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Insert.php',
        'Zend\\Db\\Sql\\Join' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Join.php',
        'Zend\\Db\\Sql\\Literal' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Literal.php',
        'Zend\\Db\\Sql\\Platform\\AbstractPlatform' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/AbstractPlatform.php',
        'Zend\\Db\\Sql\\Platform\\IbmDb2\\IbmDb2' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/IbmDb2/IbmDb2.php',
        'Zend\\Db\\Sql\\Platform\\IbmDb2\\SelectDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/IbmDb2/SelectDecorator.php',
        'Zend\\Db\\Sql\\Platform\\Mysql\\Ddl\\AlterTableDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Mysql/Ddl/AlterTableDecorator.php',
        'Zend\\Db\\Sql\\Platform\\Mysql\\Ddl\\CreateTableDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Mysql/Ddl/CreateTableDecorator.php',
        'Zend\\Db\\Sql\\Platform\\Mysql\\Mysql' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Mysql/Mysql.php',
        'Zend\\Db\\Sql\\Platform\\Mysql\\SelectDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Mysql/SelectDecorator.php',
        'Zend\\Db\\Sql\\Platform\\Oracle\\Oracle' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Oracle/Oracle.php',
        'Zend\\Db\\Sql\\Platform\\Oracle\\SelectDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Oracle/SelectDecorator.php',
        'Zend\\Db\\Sql\\Platform\\Platform' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Platform.php',
        'Zend\\Db\\Sql\\Platform\\PlatformDecoratorInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/PlatformDecoratorInterface.php',
        'Zend\\Db\\Sql\\Platform\\SqlServer\\Ddl\\CreateTableDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/SqlServer/Ddl/CreateTableDecorator.php',
        'Zend\\Db\\Sql\\Platform\\SqlServer\\SelectDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/SqlServer/SelectDecorator.php',
        'Zend\\Db\\Sql\\Platform\\SqlServer\\SqlServer' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/SqlServer/SqlServer.php',
        'Zend\\Db\\Sql\\Platform\\Sqlite\\SelectDecorator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Sqlite/SelectDecorator.php',
        'Zend\\Db\\Sql\\Platform\\Sqlite\\Sqlite' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Platform/Sqlite/Sqlite.php',
        'Zend\\Db\\Sql\\Predicate\\Between' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/Between.php',
        'Zend\\Db\\Sql\\Predicate\\Expression' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/Expression.php',
        'Zend\\Db\\Sql\\Predicate\\In' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/In.php',
        'Zend\\Db\\Sql\\Predicate\\IsNotNull' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/IsNotNull.php',
        'Zend\\Db\\Sql\\Predicate\\IsNull' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/IsNull.php',
        'Zend\\Db\\Sql\\Predicate\\Like' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/Like.php',
        'Zend\\Db\\Sql\\Predicate\\Literal' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/Literal.php',
        'Zend\\Db\\Sql\\Predicate\\NotBetween' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/NotBetween.php',
        'Zend\\Db\\Sql\\Predicate\\NotIn' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/NotIn.php',
        'Zend\\Db\\Sql\\Predicate\\NotLike' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/NotLike.php',
        'Zend\\Db\\Sql\\Predicate\\Operator' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/Operator.php',
        'Zend\\Db\\Sql\\Predicate\\Predicate' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/Predicate.php',
        'Zend\\Db\\Sql\\Predicate\\PredicateInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/PredicateInterface.php',
        'Zend\\Db\\Sql\\Predicate\\PredicateSet' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Predicate/PredicateSet.php',
        'Zend\\Db\\Sql\\PreparableSqlInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/PreparableSqlInterface.php',
        'Zend\\Db\\Sql\\Select' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Select.php',
        'Zend\\Db\\Sql\\Sql' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Sql.php',
        'Zend\\Db\\Sql\\SqlInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/SqlInterface.php',
        'Zend\\Db\\Sql\\TableIdentifier' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/TableIdentifier.php',
        'Zend\\Db\\Sql\\Update' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Update.php',
        'Zend\\Db\\Sql\\Where' => __DIR__ . '/..' . '/zendframework/zend-db/src/Sql/Where.php',
        'Zend\\Db\\TableGateway\\AbstractTableGateway' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/AbstractTableGateway.php',
        'Zend\\Db\\TableGateway\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Exception/ExceptionInterface.php',
        'Zend\\Db\\TableGateway\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Exception/InvalidArgumentException.php',
        'Zend\\Db\\TableGateway\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Exception/RuntimeException.php',
        'Zend\\Db\\TableGateway\\Feature\\AbstractFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/AbstractFeature.php',
        'Zend\\Db\\TableGateway\\Feature\\EventFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/EventFeature.php',
        'Zend\\Db\\TableGateway\\Feature\\EventFeatureEventsInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/EventFeatureEventsInterface.php',
        'Zend\\Db\\TableGateway\\Feature\\EventFeature\\TableGatewayEvent' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/EventFeature/TableGatewayEvent.php',
        'Zend\\Db\\TableGateway\\Feature\\FeatureSet' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/FeatureSet.php',
        'Zend\\Db\\TableGateway\\Feature\\GlobalAdapterFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/GlobalAdapterFeature.php',
        'Zend\\Db\\TableGateway\\Feature\\MasterSlaveFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/MasterSlaveFeature.php',
        'Zend\\Db\\TableGateway\\Feature\\MetadataFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/MetadataFeature.php',
        'Zend\\Db\\TableGateway\\Feature\\RowGatewayFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/RowGatewayFeature.php',
        'Zend\\Db\\TableGateway\\Feature\\SequenceFeature' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/Feature/SequenceFeature.php',
        'Zend\\Db\\TableGateway\\TableGateway' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/TableGateway.php',
        'Zend\\Db\\TableGateway\\TableGatewayInterface' => __DIR__ . '/..' . '/zendframework/zend-db/src/TableGateway/TableGatewayInterface.php',
        'Zend\\Stdlib\\AbstractOptions' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/AbstractOptions.php',
        'Zend\\Stdlib\\ArrayObject' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ArrayObject.php',
        'Zend\\Stdlib\\ArraySerializableInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ArraySerializableInterface.php',
        'Zend\\Stdlib\\ArrayStack' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ArrayStack.php',
        'Zend\\Stdlib\\ArrayUtils' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ArrayUtils.php',
        'Zend\\Stdlib\\ArrayUtils\\MergeRemoveKey' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ArrayUtils/MergeRemoveKey.php',
        'Zend\\Stdlib\\ArrayUtils\\MergeReplaceKey' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ArrayUtils/MergeReplaceKey.php',
        'Zend\\Stdlib\\ArrayUtils\\MergeReplaceKeyInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ArrayUtils/MergeReplaceKeyInterface.php',
        'Zend\\Stdlib\\ConsoleHelper' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ConsoleHelper.php',
        'Zend\\Stdlib\\DispatchableInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/DispatchableInterface.php',
        'Zend\\Stdlib\\ErrorHandler' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ErrorHandler.php',
        'Zend\\Stdlib\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Exception/BadMethodCallException.php',
        'Zend\\Stdlib\\Exception\\DomainException' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Exception/DomainException.php',
        'Zend\\Stdlib\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Exception/ExceptionInterface.php',
        'Zend\\Stdlib\\Exception\\ExtensionNotLoadedException' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Exception/ExtensionNotLoadedException.php',
        'Zend\\Stdlib\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Exception/InvalidArgumentException.php',
        'Zend\\Stdlib\\Exception\\LogicException' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Exception/LogicException.php',
        'Zend\\Stdlib\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Exception/RuntimeException.php',
        'Zend\\Stdlib\\FastPriorityQueue' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/FastPriorityQueue.php',
        'Zend\\Stdlib\\Glob' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Glob.php',
        'Zend\\Stdlib\\Guard\\AllGuardsTrait' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Guard/AllGuardsTrait.php',
        'Zend\\Stdlib\\Guard\\ArrayOrTraversableGuardTrait' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Guard/ArrayOrTraversableGuardTrait.php',
        'Zend\\Stdlib\\Guard\\EmptyGuardTrait' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Guard/EmptyGuardTrait.php',
        'Zend\\Stdlib\\Guard\\NullGuardTrait' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Guard/NullGuardTrait.php',
        'Zend\\Stdlib\\InitializableInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/InitializableInterface.php',
        'Zend\\Stdlib\\JsonSerializable' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/JsonSerializable.php',
        'Zend\\Stdlib\\Message' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Message.php',
        'Zend\\Stdlib\\MessageInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/MessageInterface.php',
        'Zend\\Stdlib\\ParameterObjectInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ParameterObjectInterface.php',
        'Zend\\Stdlib\\Parameters' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Parameters.php',
        'Zend\\Stdlib\\ParametersInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ParametersInterface.php',
        'Zend\\Stdlib\\PriorityList' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/PriorityList.php',
        'Zend\\Stdlib\\PriorityQueue' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/PriorityQueue.php',
        'Zend\\Stdlib\\Request' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Request.php',
        'Zend\\Stdlib\\RequestInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/RequestInterface.php',
        'Zend\\Stdlib\\Response' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/Response.php',
        'Zend\\Stdlib\\ResponseInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/ResponseInterface.php',
        'Zend\\Stdlib\\SplPriorityQueue' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/SplPriorityQueue.php',
        'Zend\\Stdlib\\SplQueue' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/SplQueue.php',
        'Zend\\Stdlib\\SplStack' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/SplStack.php',
        'Zend\\Stdlib\\StringUtils' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/StringUtils.php',
        'Zend\\Stdlib\\StringWrapper\\AbstractStringWrapper' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/StringWrapper/AbstractStringWrapper.php',
        'Zend\\Stdlib\\StringWrapper\\Iconv' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/StringWrapper/Iconv.php',
        'Zend\\Stdlib\\StringWrapper\\Intl' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/StringWrapper/Intl.php',
        'Zend\\Stdlib\\StringWrapper\\MbString' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/StringWrapper/MbString.php',
        'Zend\\Stdlib\\StringWrapper\\Native' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/StringWrapper/Native.php',
        'Zend\\Stdlib\\StringWrapper\\StringWrapperInterface' => __DIR__ . '/..' . '/zendframework/zend-stdlib/src/StringWrapper/StringWrapperInterface.php',
        'voku\\cache\\AdapterApc' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterApc.php',
        'voku\\cache\\AdapterApcu' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterApcu.php',
        'voku\\cache\\AdapterArray' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterArray.php',
        'voku\\cache\\AdapterFile' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterFile.php',
        'voku\\cache\\AdapterFileAbstract' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterFileAbstract.php',
        'voku\\cache\\AdapterFileSimple' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterFileSimple.php',
        'voku\\cache\\AdapterMemcache' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterMemcache.php',
        'voku\\cache\\AdapterMemcached' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterMemcached.php',
        'voku\\cache\\AdapterOpCache' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterOpCache.php',
        'voku\\cache\\AdapterPredis' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterPredis.php',
        'voku\\cache\\AdapterXcache' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/AdapterXcache.php',
        'voku\\cache\\Cache' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/Cache.php',
        'voku\\cache\\CacheAdapterAutoManager' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/CacheAdapterAutoManager.php',
        'voku\\cache\\CacheChain' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/CacheChain.php',
        'voku\\cache\\CachePsr16' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/CachePsr16.php',
        'voku\\cache\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/Exception/InvalidArgumentException.php',
        'voku\\cache\\SerializerDefault' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/SerializerDefault.php',
        'voku\\cache\\SerializerIgbinary' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/SerializerIgbinary.php',
        'voku\\cache\\SerializerNo' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/SerializerNo.php',
        'voku\\cache\\iAdapter' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/iAdapter.php',
        'voku\\cache\\iCache' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/iCache.php',
        'voku\\cache\\iSerializer' => __DIR__ . '/..' . '/voku/simple-cache/src/voku/cache/iSerializer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcbda25b16bb8365467298ce193f0f30c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcbda25b16bb8365467298ce193f0f30c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcbda25b16bb8365467298ce193f0f30c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcbda25b16bb8365467298ce193f0f30c::$classMap;

        }, null, ClassLoader::class);
    }
}
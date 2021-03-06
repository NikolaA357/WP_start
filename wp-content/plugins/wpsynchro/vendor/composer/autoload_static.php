<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0443667efefb62f831d90067781ebd1c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPSynchro\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPSynchro\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'WPSynchro\\CLI\\WPCLICommand' => __DIR__ . '/../..' . '/includes/CLI/WPCLICommand.php',
        'WPSynchro\\CommonFunctions' => __DIR__ . '/../..' . '/includes/CommonFunctions.php',
        'WPSynchro\\Compatibility\\Compatibility' => __DIR__ . '/../..' . '/includes/compatibility/class-compatibility.php',
        'WPSynchro\\Database\\DatabaseBackup' => __DIR__ . '/../..' . '/includes/Database/DatabaseBackup.php',
        'WPSynchro\\Database\\DatabaseFinalize' => __DIR__ . '/../..' . '/includes/Database/DatabaseFinalize.php',
        'WPSynchro\\Database\\DatabaseSync' => __DIR__ . '/../..' . '/includes/Database/DatabaseSync.php',
        'WPSynchro\\Files\\FilesSync' => __DIR__ . '/../..' . '/includes/Files/FilesSync.php',
        'WPSynchro\\Files\\FinalizeFiles' => __DIR__ . '/../..' . '/includes/Files/FinalizeFiles.php',
        'WPSynchro\\Files\\Location' => __DIR__ . '/../..' . '/includes/Files/Location.php',
        'WPSynchro\\Files\\PathHandler' => __DIR__ . '/../..' . '/includes/Files/PathHandler.php',
        'WPSynchro\\Files\\PopulateListHandler' => __DIR__ . '/../..' . '/includes/Files/PopulateListHandler.php',
        'WPSynchro\\Files\\SyncList' => __DIR__ . '/../..' . '/includes/Files/SyncList.php',
        'WPSynchro\\Files\\TransferFiles' => __DIR__ . '/../..' . '/includes/Files/TransferFiles.php',
        'WPSynchro\\Files\\TransportHandler' => __DIR__ . '/../..' . '/includes/Files/TransportHandler.php',
        'WPSynchro\\Finalize\\FinalizeSync' => __DIR__ . '/../..' . '/includes/Finalize/FinalizeSync.php',
        'WPSynchro\\Initiate\\InitiateSync' => __DIR__ . '/../..' . '/includes/Initiate/InitiateSync.php',
        'WPSynchro\\Installation' => __DIR__ . '/../..' . '/includes/Installation.php',
        'WPSynchro\\InstallationFactory' => __DIR__ . '/../..' . '/includes/InstallationFactory.php',
        'WPSynchro\\Job' => __DIR__ . '/../..' . '/includes/Job.php',
        'WPSynchro\\Licensing' => __DIR__ . '/../..' . '/includes/Licensing.php',
        'WPSynchro\\Logger\\FileLogger' => __DIR__ . '/../..' . '/includes/Logger/FileLogger.php',
        'WPSynchro\\Logger\\SyncMetadataLog' => __DIR__ . '/../..' . '/includes/Logger/SyncMetadataLog.php',
        'WPSynchro\\Masterdata\\MasterdataSync' => __DIR__ . '/../..' . '/includes/Masterdata/MasterdataSync.php',
        'WPSynchro\\Pages\\AdminAddEdit' => __DIR__ . '/../..' . '/includes/Pages/AdminAddEdit.php',
        'WPSynchro\\Pages\\AdminLicensing' => __DIR__ . '/../..' . '/includes/Pages/AdminLicensing.php',
        'WPSynchro\\Pages\\AdminLog' => __DIR__ . '/../..' . '/includes/Pages/AdminLog.php',
        'WPSynchro\\Pages\\AdminLogTable' => __DIR__ . '/../..' . '/includes/Pages/AdminLogTable.php',
        'WPSynchro\\Pages\\AdminOverview' => __DIR__ . '/../..' . '/includes/Pages/AdminOverview.php',
        'WPSynchro\\Pages\\AdminOverviewTable' => __DIR__ . '/../..' . '/includes/Pages/AdminOverviewTable.php',
        'WPSynchro\\Pages\\AdminRunSync' => __DIR__ . '/../..' . '/includes/Pages/AdminRunSync.php',
        'WPSynchro\\Pages\\AdminSetup' => __DIR__ . '/../..' . '/includes/Pages/AdminSetup.php',
        'WPSynchro\\Pages\\AdminSupport' => __DIR__ . '/../..' . '/includes/Pages/AdminSupport.php',
        'WPSynchro\\REST\\ClientSyncDatabase' => __DIR__ . '/../..' . '/includes/REST/ClientSyncDatabase.php',
        'WPSynchro\\REST\\DatabaseBackup' => __DIR__ . '/../..' . '/includes/REST/DatabaseBackup.php',
        'WPSynchro\\REST\\DownloadLog' => __DIR__ . '/../..' . '/includes/REST/DownloadLog.php',
        'WPSynchro\\REST\\FileTransfer' => __DIR__ . '/../..' . '/includes/REST/FileTransfer.php',
        'WPSynchro\\REST\\Filesystem' => __DIR__ . '/../..' . '/includes/REST/Filesystem.php',
        'WPSynchro\\REST\\FilterFilterIterator' => __DIR__ . '/../..' . '/includes/REST/PopulateFileList.php',
        'WPSynchro\\REST\\Finalize' => __DIR__ . '/../..' . '/includes/REST/Finalize.php',
        'WPSynchro\\REST\\GetFiles' => __DIR__ . '/../..' . '/includes/REST/GetFiles.php',
        'WPSynchro\\REST\\HealthCheck' => __DIR__ . '/../..' . '/includes/REST/HealthCheck.php',
        'WPSynchro\\REST\\Initiate' => __DIR__ . '/../..' . '/includes/REST/Initiate.php',
        'WPSynchro\\REST\\MasterData' => __DIR__ . '/../..' . '/includes/REST/MasterData.php',
        'WPSynchro\\REST\\PathData' => __DIR__ . '/../..' . '/includes/REST/Filesystem.php',
        'WPSynchro\\REST\\PopulateFileList' => __DIR__ . '/../..' . '/includes/REST/PopulateFileList.php',
        'WPSynchro\\REST\\PopulateFileListState' => __DIR__ . '/../..' . '/includes/REST/PopulateFileList.php',
        'WPSynchro\\REST\\RESTServices' => __DIR__ . '/../..' . '/includes/REST/RESTServices.php',
        'WPSynchro\\REST\\Status' => __DIR__ . '/../..' . '/includes/REST/Status.php',
        'WPSynchro\\REST\\Synchronize' => __DIR__ . '/../..' . '/includes/REST/Synchronize.php',
        'WPSynchro\\REST\\TimeoutCheck' => __DIR__ . '/../..' . '/includes/REST/TimeoutCheck.php',
        'WPSynchro\\ServiceController' => __DIR__ . '/../..' . '/includes/ServiceController.php',
        'WPSynchro\\Status\\SynchronizeStatus' => __DIR__ . '/../..' . '/includes/Status/SynchronizeStatus.php',
        'WPSynchro\\SynchronizeController' => __DIR__ . '/../..' . '/includes/SynchronizeController.php',
        'WPSynchro\\Transport\\RemoteConnection' => __DIR__ . '/../..' . '/includes/Transport/RemoteConnection.php',
        'WPSynchro\\Transport\\RemoteTestTransport' => __DIR__ . '/../..' . '/includes/Transport/RemoteTestTransport.php',
        'WPSynchro\\Transport\\RemoteTransport' => __DIR__ . '/../..' . '/includes/Transport/RemoteTransport.php',
        'WPSynchro\\Transport\\RemoteTransportResult' => __DIR__ . '/../..' . '/includes/Transport/RemoteTransportResult.php',
        'WPSynchro\\Transport\\ReturnResult' => __DIR__ . '/../..' . '/includes/Transport/ReturnResult.php',
        'WPSynchro\\Transport\\Transfer' => __DIR__ . '/../..' . '/includes/Transport/Transfer.php',
        'WPSynchro\\Transport\\TransferFile' => __DIR__ . '/../..' . '/includes/Transport/TransferFile.php',
        'WPSynchro\\Utilities\\AdminActivation' => __DIR__ . '/../..' . '/includes/Utilities/AdminActivation.php',
        'WPSynchro\\Utilities\\AdminDeactivation' => __DIR__ . '/../..' . '/includes/Utilities/AdminDeactivation.php',
        'WPSynchro\\Utilities\\Compatibility\\Compatibility' => __DIR__ . '/../..' . '/includes/Utilities/Compatibility/Compatibility.php',
        'WPSynchro\\Utilities\\Compatibility\\MUPluginHandler' => __DIR__ . '/../..' . '/includes/Utilities/Compatibility/MUPluginHandler.php',
        'WPSynchro\\Utilities\\DatabaseTables' => __DIR__ . '/../..' . '/includes/Utilities/DatabaseTables.php',
        'WPSynchro\\Utilities\\DebugInformation' => __DIR__ . '/../..' . '/includes/Utilities/DebugInformation.php',
        'WPSynchro\\Utilities\\SyncTimer' => __DIR__ . '/../..' . '/includes/Utilities/SyncTimer.php',
        'WPSynchro\\Utilities\\SyncTimerList' => __DIR__ . '/../..' . '/includes/Utilities/SyncTimerList.php',
        'WPSynchro\\WPSynchroBootstrap' => __DIR__ . '/../..' . '/includes/WPSynchroBootstrap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0443667efefb62f831d90067781ebd1c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0443667efefb62f831d90067781ebd1c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0443667efefb62f831d90067781ebd1c::$classMap;

        }, null, ClassLoader::class);
    }
}

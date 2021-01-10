<?php
namespace Liu\Kf;

class KfServiceProvider
{
    /**
     * 在注册后进行服务的启动。
     *
     * @return void
     */
    public function boot()
    {
	// 发布路由
	$this->loadRoutesFrom(__DIR__ . '/../routes/kf.php');

	// 数据库迁移
	$this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}

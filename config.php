<?php
/**
 * ============================================
 * 项目全局配置文件
 * 位置：项目根目录 /config.php
 * ============================================
 * 注意：本文件包含敏感信息（API密钥等），
 * 请勿提交到公开的版本控制系统。
 * 建议生产环境使用环境变量替代敏感值。
 * ============================================
 */

// ============================================
// 1. 应用路径常量
// ============================================
define('APP_ROOT', __DIR__);
define('ADMIN_PANEL_DIR', APP_ROOT . '/admin-panel');
define('VIEWS_DIR', ADMIN_PANEL_DIR . '/views');

// ============================================
// 2. 应用 URL 常量
// ============================================
define('APP_URL', 'https://aids.gongziyu.com/');
define('ADMIN_PANEL_URL', APP_URL . 'admin-panel');
define('PUBLIC_URL', ADMIN_PANEL_URL . '/public');

// ============================================
// 3. 数据库配置
// ============================================
define('DB_HOST', 'localhost');
define('DB_USER', 'your_db_username');
define('DB_PASS', 'your_db_password');
define('DB_NAME', 'your_database_name');

// ============================================
// 4. Redis 缓存配置
// ============================================
define('REDIS_HOST', 'localhost');
define('REDIS_PORT', 6379);
define('REDIS_PASSWORD', '');
define('REDIS_DB', 0);
define('REDIS_TIMEOUT', 2);

// ============================================
// 5. 阿里云百炼 AIGC API 配置
// ============================================
define('ALIYUN_API_ID', 'your_aliyun_api_id');
define('ALIYUN_API_KEY', 'your_aliyun_api_key');

// ============================================
// 6. 中邮 EMS 运费查询 API 配置
// ============================================
// 通用
define('EMS_TOKEN', 'your_ems_token');
define('EMS_KEY', 'your_ems_key');

// 平台专用
define('EMS_TOKEN_Amazon', 'your_ems_token_amazon');
define('EMS_KEY_Amazon', 'your_ems_key_amazon');
define('EMS_TOKEN_eBay', 'your_ems_token_ebay');
define('EMS_KEY_eBay', 'your_ems_key_ebay');
define('EMS_TOKEN_Shopify', 'your_ems_token_shopify');
define('EMS_KEY_Shopify', 'your_ems_key_shopify');

// ============================================
// 7. 运德物流 WD API 配置
// ============================================
// 通用
define('WD_APP_ID', 'your_wd_app_id');
define('WD_APP_TOKEN', 'your_wd_app_token');

// 平台专用
define('WD_APP_ID_Amazon', 'your_wd_app_id_amazon');
define('WD_APP_TOKEN_Amazon', 'your_wd_app_token_amazon');
define('WD_APP_ID_eBay', 'your_wd_app_id_ebay');
define('WD_APP_TOKEN_eBay', 'your_wd_app_token_ebay');
define('WD_APP_ID_Shopify', 'your_wd_app_id_shopify');
define('WD_APP_TOKEN_Shopify', 'your_wd_app_token_shopify');

// ============================================
// 8. 钉钉消息推送 API 配置
// ============================================
define('DINGDING_APP_KEY', 'your_dingding_app_key');
define('DINGDING_APP_SECRET', 'your_dingding_app_secret');
define('DINGDING_AGENT_ID', 0);

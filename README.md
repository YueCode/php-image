# 腾讯云万象优图SDK For Laravel 

腾讯云万象优图SDK 


### 安装

执行 `composer` 命令安装拓展
```
composer require yuecode/image
```

在`config/app.php`中的 Provider 中添加
```
\Yuecode\Image\ImageProvider::class,
```

执行 `php artisan vendor:publish `,将自动在 `config/` 目录下生成   `image.php` 文件，修改配置文件中的对应选项。

配置完成后，在需要使用的文件中使用
```php
use Yuecode\Image\YouTu;
```
然后使用静态方法调用
比如

```php
 $res = YouTu::pornDetectUrl(
           array(
               "http://www.bz55.com/uploads/allimg/140805/1-140P5162300-50.jpg","http://img.taopic.com/uploads/allimg/130716/318769-130G60P30462.jpg"
           )
        );
dd($res);
```

### 方法列表

|      方法名       |           备注           |
| :------------: | :--------------------: |
|  uploadImage   |     上传图片，万象优图V2接口      |
|   statImage    |    查询图片信息，万象优图V2接口     |
|   copyImage    |     复制图片，万象优图V2接口      |
|    delImage    |     删除图片，万象优图V2接口      |
| uploadImageV1  |     上传图片，万象优图V1接口      |
|  statImageV1   |    查询图片信息，万象优图V1接口     |
|  copyImageV1   |     复制图片，万象优图V1接口      |
|   delImageV1   |     删除图片，万象优图V1接口      |
|  uploadVideo   |          上传视频          |
|   statVideo    |         查看视频状态         |
|    delVideo    |         删除视频文件         |
|   pornDetect   |      智能鉴黄，参数为URL       |
| pornDetectUrl  | 多图片智能鉴黄，参数为URL构成的array |
| pornDetectFile |  图片文件只能鉴黄，参数为文件的array  |

### 版本说明

V1版本：万象优图第一个版本，无bucket概念，控制台创建的是应用；
V2版本：万象优图第二个版本，首次提出bucket概念；
V2加强版：万象优图第三个版本，有bucket概念，采用新的实时处理风格，fileid支持特殊字符，支持回源镜像、样式下载别名、样式分隔符。

V2 和 V2加强版使用V2接口即可。
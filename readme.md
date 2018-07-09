# Installation

* Download ministra archive
* Copy docker-compose.yml
* Add volume for ministra downloaded archive
    
    Example:
    ```yml
        volumes:
            - /path/to/ministra/ministra.tar.gz:/opt/ministra.tar.gz
    ```
    Supported archive type: zip, tar & tar.gz
* Add enviroment variable in ministra container with ministra mount path
    
    Example:
    ```yml
        environment:
            - "MINISTRA_PATH=/opt/ministra.tar.gz"
    ```
* Change setting in docker-compose.yml
* Build docker containers:
    ```bash
      docker-compose up -d
    ```
* Visit to [local ministra instance](http://localhost)

On start ministra will be auto installed

## Environment variables for ministra image:

 Variable | Type | Default Value | Description
 -------- | ---- | ------------- | -----------
 MINISTRA_MYSQL_HOST | string | mysql | Mysql host
 MINISTRA_MYSQL_PORT | string | 3306 | Mysql port
 MINISTRA_MYSQL_USER | string | stalker | Mysql user
 MINISTRA_MYSQL_PASS | string | stalkerpassword | Mysql password
 MINISTRA_MYSQL_DBNAME | string | stalker_db | Mysql database name
 MINISTRA_MEMCACHE_HOST | string | memcache | Memcache host
 MINISTRA_PATH | string | none | Path to mount ministra archive
 MINISTRA_AUTH_LOGIN | string | ministra | Default http authenctication login for storage |
 MINISTRA_AUTH_PASSWORD | string | ministra_password | Default http authenctication password for storage |

## Setting up storage

Change path in (storage config)[storage-config.php] (if you need)
Mount storage as volume to container:

```yml
servises:
    ministra:
      ...
      volumes:
        - ministra_storage:/data
        - /path/to/storage-config.php:/storage.php # Mount only if you need change storage config
volumes:
    ministra_storage:
```

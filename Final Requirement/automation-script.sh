#!/bin/bash

BACKUP_DIR="/home/group8/enterprise-cloud/backups"
CONTAINER="enterprise-mysql"
DATABASE="wordpress"
MYSQL_CONFIG="/home/group8/enterprise-cloud/.mysql-backup.cnf"
TIMESTAMP=$(date +"%Y-%m-%d_%H-%M-%S")
BACKUP_FILE="$BACKUP_DIR/wordpress_db_$TIMESTAMP.sql.gz"

mkdir -p "$BACKUP_DIR"

docker cp "$MYSQL_CONFIG" "$CONTAINER":/tmp/mysql-backup.cnf

if docker exec "$CONTAINER" mysqldump \
    --defaults-extra-file=/tmp/mysql-backup.cnf \
    "$DATABASE" | gzip > "$BACKUP_FILE"
then
    echo "$(date): Backup successful - $BACKUP_FILE"
    ls -1t "$BACKUP_DIR"/wordpress_db_*.sql.gz 2>/dev/null | tail -n +8 | xargs -r rm --
else
    echo "$(date): Backup FAILED"
    rm -f "$BACKUP_FILE"
    docker exec "$CONTAINER" rm -f /tmp/mysql-backup.cnf
    exit 1
fi

docker exec "$CONTAINER" rm -f /tmp/mysql-backup.cnf

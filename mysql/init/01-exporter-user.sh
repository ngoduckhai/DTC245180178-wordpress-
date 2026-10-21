#!/bin/bash
set -Eeuo pipefail

: "${MYSQL_ROOT_PASSWORD:?MYSQL_ROOT_PASSWORD must be set}"
: "${MYSQL_EXPORTER_PASSWORD:?MYSQL_EXPORTER_PASSWORD must be set}"

escaped_password=$(printf '%s' "$MYSQL_EXPORTER_PASSWORD" | sed "s/\\\\/\\\\\\\\/g; s/'/''/g")

MYSQL_PWD="$MYSQL_ROOT_PASSWORD" mysql --protocol=socket -uroot <<SQL
CREATE USER IF NOT EXISTS 'exporter'@'%' IDENTIFIED BY '${escaped_password}';
ALTER USER 'exporter'@'%' IDENTIFIED BY '${escaped_password}';
GRANT PROCESS, REPLICATION CLIENT, SELECT ON *.* TO 'exporter'@'%';
SQL

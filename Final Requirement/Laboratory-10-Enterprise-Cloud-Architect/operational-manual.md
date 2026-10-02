# CCM101 – Cloud Computing
# Mission 10: The Enterprise Cloud Architect
## Enterprise Cloud Infrastructure Operational Manual

**Application Stack:** Docker-Based WordPress + MySQL  
**Prepared by:** Group 8  
**Date:** September 2026

---

## 1. Project Overview

This project deploys a WordPress and MySQL application using Docker Compose on an Ubuntu Server virtual machine. It includes persistent storage, UFW firewall security, and automated database backups using Bash and Cron.

### Technologies

- Windows laptop
- Oracle VirtualBox
- Ubuntu Server 24.04
- Docker Engine
- Docker Compose
- WordPress
- MySQL 8.0
- UFW
- Bash
- Cron
- GitHub

---

## 2. Architecture and Virtual Machine

The infrastructure uses a Windows laptop as the physical host, Oracle VirtualBox as the hypervisor, and Ubuntu Server 24.04 as the Linux virtual machine. Docker Compose runs the WordPress and MySQL containers, with UFW providing firewall protection.

### Virtual Machine Configuration

- VM: `CCM101-Ubuntu-Server`
- Hostname: `group8`
- OS: Ubuntu Server 24.04
- CPU: 2 vCPU
- RAM: 2 GB
- Virtual Disk: approximately 41 GB
- Network: NAT with port forwarding
- Web: `127.0.0.1:8080`
- SSH: `127.0.0.1:2222`

### Network

VirtualBox forwards host port 8080 to the VM web service on port 80 and host port 2222 to SSH port 22.

![Architecture Diagram](screenshots/ArchitectureDiagram.png)

---

## 3. Docker and Compose Deployment

Docker Compose deploys two linked containers:

- WordPress: `wordpress:latest`
- MySQL: `mysql:8.0`

The containers communicate through the private Docker network `enterprise-cloud_default`.

Persistent volumes:

- `wordpress_data`
- `mysql_data`

MySQL uses port `3306` internally and is not exposed to the host.

The Docker Compose configuration was validated successfully. Both containers were tested, and MySQL reported a healthy status.

---

## 4. Persistent Storage

Docker volumes preserve WordPress and MySQL data independently from the containers.

| Service | Volume | Mount |
|---|---|---|
| WordPress | `wordpress_data` | `/var/www/html` |
| MySQL | `mysql_data` | `/var/lib/mysql` |

The **Cloud Infrastructure Test** post remained available after container recreation, confirming successful persistent storage.

---

## 5. Security and Firewall

UFW was configured on Ubuntu Server with incoming connections denied by default and outgoing connections allowed.

### Allowed Ports

- SSH – TCP 22
- Web – TCP 80

MySQL is not exposed to the host network and is accessible only through the private Docker network.

UFW was verified as active with the default-deny incoming policy.

---

## 6. Automation and Scheduled Backup

A custom Bash script, `automation-script.sh`, performs compressed MySQL database backups.

### Backup Configuration

- Database: `wordpress`
- Container: `enterprise-mysql`
- Format: `.sql.gz`
- Directory: `backups/`
- Retention: 7 recent backups

### Cron Schedule

`0 2 * * * /home/group8/enterprise-cloud/automation-script.sh >> /home/group8/enterprise-cloud/backups/backup.log 2>&1`

The backup script was tested successfully. Valid backup files were created and the WordPress test data was verified inside the backup.

---

## 7. Operational Procedures

### Check containers

`docker compose ps`

### Start application

`docker compose up -d`

### Stop application

`docker compose down`

### Check backups

`ls -lh backups/`

### Manual backup

`./automation-script.sh`

### Important

Do not use `docker compose down -v` during normal operation because it removes the persistent Docker volumes containing application and database data.

---

## 8. Verification Evidence

The completed system was verified through:

1. Ubuntu Server system information
2. Docker container status
3. Group8 WordPress website
4. Persistent storage test
5. UFW firewall status
6. Docker persistent volumes
7. Docker private network
8. Cron schedule
9. Database backup files
10. Backup integrity and test-data verification

Screenshots are stored in the `screenshots/` directory.

---

## 9. Project Result

The completed infrastructure provides a persistent WordPress and MySQL application running through Docker Compose on Ubuntu Server, protected by UFW and supported by automated database backups.

---

## 10. Final Reflection

Our group developed the infrastructure by planning, deploying, testing, troubleshooting, and verifying each major component. The final environment demonstrates containerization, networking, security, persistent storage, automation, and operational management.

AI tools were used to assist us with troubleshooting, clarification, and documentation. The system configuration, testing, and final implementation were performed and verified by our group.

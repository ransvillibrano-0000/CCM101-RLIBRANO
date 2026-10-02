# CCM101 Mission 10 – The Enterprise Cloud Architect

## Project Overview

This project implements a secure and persistent multi-tier cloud application using Ubuntu Server, Docker Compose, WordPress, and MySQL.

The infrastructure runs inside an Ubuntu Server virtual machine hosted by Oracle VirtualBox. WordPress and MySQL operate as linked Docker containers with persistent storage.

## Infrastructure

- Host: Windows laptop
- Hypervisor: Oracle VirtualBox
- Virtual Machine: CCM101-Ubuntu-Server
- Operating System: Ubuntu Server 24.04 LTS
- CPU: 2 vCPU
- RAM: 2 GB
- Storage: approximately 41 GB
- Container Platform: Docker Engine and Docker Compose
- Application: WordPress
- Database: MySQL 8.0
- Firewall: UFW
- Automation: Bash and Cron

## Network

VirtualBox NAT port forwarding is used for host access:

- Web: 127.0.0.1:8080 → Ubuntu port 80
- SSH: 127.0.0.1:2222 → Ubuntu port 22

MySQL port 3306 is not exposed to the host and is accessible only through the Docker Compose network.

## Security

UFW is enabled with a default-deny incoming policy. Only SSH (22/tcp) and web traffic (80/tcp) are explicitly allowed.

## Persistent Storage

Docker volumes preserve:

- WordPress application data
- MySQL database data

Persistence was verified after container recreation.

## Automation

A custom Bash script creates compressed MySQL database backups.

Cron schedules the backup automatically every day at 2:00 AM.

## Documentation

- `architecture-diagram.png` – infrastructure architecture
- `docker-compose.yml` – container deployment configuration
- `automation-script.sh` – database backup automation
- `operational-manual.md` – operational documentation
- `final-reflection.md` – project reflection
- `screenshots/` – project verification evidence

## Security Notice

Environment files containing real passwords are intentionally excluded from the repository. Use `.env.example` as a template for required environment variables.

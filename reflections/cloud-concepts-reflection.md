# Cloud Concepts and Version Control Reflection

### 1. Cloud Services I Use
The three cloud applications I use regularly in my daily life and academic routine are Google Drive, Messenger, and GCash.

### 2. Service and Deployment Models

* **Google Drive**
  * **Service Model:** Software as a Service (SaaS). It provides a ready-to-use cloud storage platform where users can store, sync, and edit files directly without managing underlying servers or software installations.
  * **Deployment Model:** Public Cloud. Google owns and operates the infrastructure, making storage resources accessible to anyone with an account over the public internet.

* **Messenger**
  * **Service Model:** Software as a Service (SaaS). Meta delivers a complete messaging application over the web and mobile devices, managing all networking, database storage, and code logic behind the scenes.
  * **Deployment Model:** Public Cloud. The messaging network is hosted on Meta's global cloud infrastructure and made accessible to millions of public users worldwide.

* **GCash**
  * **Service Model:** Software as a Service (SaaS). It operates as a fully managed mobile wallet application, handling financial transactions, bills, and fund transfers through a simplified user interface.
  * **Deployment Model:** Hybrid Cloud. While the client-facing application and web APIs operate on public cloud infrastructure for scalability, critical financial ledgers and core banking integrations run on private, highly secure server environments to satisfy regulatory and data security standards.

### 3. Git & GitHub for Cloud Projects
Version control is critical when managing cloud infrastructure because modern infrastructure is frequently defined as code (IaC). A single accidental syntax mistake or misconfiguration in a cloud setup script can cause severe service outages, security vulnerabilities, or data loss. 

GitHub acts as a centralized collaboration platform that helps engineering teams track every code modification, review changes via pull requests, and audit history. By enforcing branch workflows, teams can safely test infrastructure modifications in isolated environments before deploying them to live production, minimizing human error and enabling instant rollbacks if issues arise.

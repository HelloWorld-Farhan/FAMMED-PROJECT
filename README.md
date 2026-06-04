# 🤝 FAMMED — Client Contract & Development Service Platform

<p align="center">
  <img src="https://img.shields.io/badge/Platform-Web-0078D4?style=for-the-badge&logo=googlechrome&logoColor=white"/>
  <img src="https://img.shields.io/badge/Frontend-HTML%20%7C%20CSS%20%7C%20JS-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>
  <img src="https://img.shields.io/badge/Backend-Java%20%2F%20Spring%20Boot-6DB33F?style=for-the-badge&logo=springboot&logoColor=white"/>
  <img src="https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>
  <img src="https://img.shields.io/badge/License-MIT-brightgreen?style=for-the-badge"/>
</p>

<p align="center">
  A web-based platform designed to connect <strong>clients with developers</strong> — enabling seamless project requirement submission, contract requests, and inquiry management for custom <strong>app and website development services</strong>.
</p>

---

## ✨ Features

| Feature | Description |
|---|---|
| 🧑‍💼 **Client Registration & Login** | Secure account creation and authentication for clients |
| 📝 **Project Requirement Form** | Structured form to capture detailed development requirements |
| 📱 **Service Selection** | Choose between app development, website development, or both |
| 📊 **Contract / Proposal Request** | Submit and track development contract requests |
| 📧 **Contact & Inquiry System** | Direct communication channel between client and developer |
| 🔐 **Secure Authentication** | Protected login system with credential validation |
| 📂 **Client Data Management** | Organized storage and retrieval of all client submissions |

---

## 📂 Full Project File Structure

```
FAMMED/
├── src/
│   ├── main/
│   │   ├── java/com/fammed/
│   │   │   ├── controller/
│   │   │   │   ├── AuthController.java          ← Handles login & registration
│   │   │   │   ├── ClientController.java        ← Client profile & dashboard
│   │   │   │   ├── ProjectController.java       ← Project requirement submission
│   │   │   │   ├── ContractController.java      ← Contract request management
│   │   │   │   └── ContactController.java       ← Inquiry & contact handling
│   │   │   │
│   │   │   ├── model/
│   │   │   │   ├── Client.java                  ← Client entity
│   │   │   │   ├── Project.java                 ← Project requirement entity
│   │   │   │   ├── Contract.java                ← Contract request entity
│   │   │   │   └── Inquiry.java                 ← Contact/inquiry entity
│   │   │   │
│   │   │   ├── repository/
│   │   │   │   ├── ClientRepository.java
│   │   │   │   ├── ProjectRepository.java
│   │   │   │   ├── ContractRepository.java
│   │   │   │   └── InquiryRepository.java
│   │   │   │
│   │   │   ├── service/
│   │   │   │   ├── AuthService.java
│   │   │   │   ├── ClientService.java
│   │   │   │   ├── ProjectService.java
│   │   │   │   └── ContractService.java
│   │   │   │
│   │   │   └── FammedApplication.java           ← Spring Boot entry point
│   │   │
│   │   └── resources/
│   │       ├── static/
│   │       │   ├── css/
│   │       │   │   ├── style.css                ← Global stylesheet
│   │       │   │   ├── auth.css                 ← Login/register styles
│   │       │   │   └── dashboard.css            ← Dashboard styles
│   │       │   │
│   │       │   ├── js/
│   │       │   │   ├── main.js                  ← Core frontend logic
│   │       │   │   ├── form-validation.js       ← Client-side form validation
│   │       │   │   └── dashboard.js             ← Dashboard interactions
│   │       │   │
│   │       │   └── images/                      ← Static assets & icons
│   │       │
│   │       ├── templates/
│   │       │   ├── index.html                   ← Landing / home page
│   │       │   ├── login.html                   ← Client login page
│   │       │   ├── register.html                ← Client registration page
│   │       │   ├── dashboard.html               ← Client dashboard
│   │       │   ├── submit-project.html          ← Project requirement form
│   │       │   ├── request-contract.html        ← Contract request form
│   │       │   ├── contact.html                 ← Contact & inquiry page
│   │       │   └── services.html                ← Services overview page
│   │       │
│   │       └── application.properties           ← DB config & app settings
│
├── pom.xml                                      ← Maven dependencies
└── README.md
```

---

## ⚙️ Prerequisites

Before you begin, make sure you have the following installed:

- ✅ **Java JDK 17+**  
  👉 [Download JDK](https://www.oracle.com/java/technologies/downloads/)
- ✅ **Maven 3.8+** — for building the project  
  👉 [Download Maven](https://maven.apache.org/download.cgi)
- ✅ **MySQL 8.0+** — for the database  
  👉 [Download MySQL](https://dev.mysql.com/downloads/)
- ✅ **Git** — for cloning the repository  
  👉 [Download Git](https://git-scm.com/)
- ✅ **IntelliJ IDEA / VS Code** — recommended IDEs  
  👉 [IntelliJ IDEA](https://www.jetbrains.com/idea/) | [VS Code](https://code.visualstudio.com/)

---

## 🚀 Step-by-Step Setup Guide

### Step 1 — Clone the Repository

Open a terminal and run:

```bash
git clone https://github.com/HelloWorld-Farhan/FAMMED.git
cd FAMMED
```

Or download the ZIP directly from GitHub:
> Click **Code → Download ZIP** → Extract the folder

---

### Step 2 — Configure the Database

1. Open **MySQL Workbench** or your preferred MySQL client
2. Create a new database:

```sql
CREATE DATABASE fammed_db;
```

3. Open `src/main/resources/application.properties` and update the following:

```properties
spring.datasource.url=jdbc:mysql://localhost:3306/fammed_db
spring.datasource.username=your_mysql_username
spring.datasource.password=your_mysql_password
spring.jpa.hibernate.ddl-auto=update
spring.jpa.show-sql=true
```

> 💡 Replace `your_mysql_username` and `your_mysql_password` with your actual MySQL credentials.

---

### Step 3 — Open the Project in Your IDE

#### IntelliJ IDEA
1. Launch **IntelliJ IDEA**
2. Click **"Open"** and navigate to the cloned `FAMMED` folder
3. Click **OK** — IntelliJ will auto-detect the Maven project
4. Wait for **Maven** to download all dependencies (first time may take a few minutes)

#### VS Code
1. Launch **VS Code**
2. Click `File → Open Folder` and select the `FAMMED` folder
3. Install the **Extension Pack for Java** if not already installed
4. Maven should auto-resolve dependencies

---

### Step 4 — Install Maven Dependencies

If dependencies are not auto-resolved, run:

```bash
mvn clean install
```

This will download all required libraries and build the project.

---

### Step 5 — Run the Application

```bash
mvn spring-boot:run
```

Or run `FammedApplication.java` directly from your IDE by clicking the ▶️ **Run** button.

Once started, open your browser and navigate to:

```
http://localhost:8080
```

---

### Step 6 — Test the Platform

1. Go to `http://localhost:8080/register` to create a new client account
2. Login at `http://localhost:8080/login`
3. Submit a project requirement from the dashboard
4. Request a contract from the services page
5. Use the contact form to submit an inquiry

---

## 🧭 App Flow & Pages

```
Landing Page (index.html)
        ↓
Register / Login
        ↓
Client Dashboard
   ├── 📝 Submit Project Requirements  →  submit-project.html
   │        └── Detailed requirement form with service selection
   ├── 📊 Request Contract / Proposal  →  request-contract.html
   │        └── Contract initiation with project scope details
   ├── 🛠️ Services Overview            →  services.html
   │        └── App development, Website development options
   └── 📧 Contact & Inquiries          →  contact.html
            └── Direct inquiry submission to the developer
```

---

## 🛠️ Tech Stack

| Component | Technology |
|---|---|
| Frontend | HTML, CSS, JavaScript |
| Backend | Java, Spring Boot |
| Database | MySQL |
| ORM | Spring Data JPA / Hibernate |
| Templating | Thymeleaf |
| Build Tool | Maven |
| IDE | IntelliJ IDEA / VS Code |
| Version Control | Git & GitHub |

---

## 🔧 Troubleshooting

### ❌ Maven Build Fails

- Ensure JDK 17+ is installed and set as the project SDK
- Run `mvn clean install -U` to force-update dependencies
- Check your internet connection — Maven downloads dependencies on first build

### ❌ Database Connection Error

- Verify MySQL is running: `sudo service mysql start` (Linux) or start MySQL from Services (Windows)
- Double-check credentials in `application.properties`
- Confirm the database `fammed_db` exists: `SHOW DATABASES;` in MySQL

### ❌ Port 8080 Already in Use

Change the port in `application.properties`:

```properties
server.port=9090
```

Then access the app at `http://localhost:9090`

### ❌ Thymeleaf Template Not Found

- Confirm all HTML files are inside `src/main/resources/templates/`
- Clean and rebuild: `mvn clean package`

### ❌ Static Assets (CSS/JS) Not Loading

- Confirm all CSS/JS files are inside `src/main/resources/static/`
- Hard refresh the browser: `Ctrl + Shift + R`

---

## 📋 Permissions & Security

| Feature | Implementation |
|---|---|
| Authentication | Spring Security session-based login |
| Password Storage | BCrypt hashed passwords |
| Form Validation | Client-side JS + server-side Spring Validation |
| SQL Injection Prevention | JPA parameterized queries |

---

## 🎯 Project Objective

FAMMED simplifies the client-developer engagement process by providing a structured digital platform to:

- Collect detailed project requirements from clients
- Manage and track development contract requests
- Organize all project inquiries in one place
- Improve communication between clients and developers
- Provide a professional first impression for development services

---

## 👨‍💻 Author

**Farhan Khalid** — Full Stack Developer  
📧 farhankhalid17968@gmail.com  
🔗 [LinkedIn](https://www.linkedin.com/in/farhan-khalid-117514259/)  
🐙 [GitHub](https://github.com/HelloWorld-Farhan)

---

## 📄 License

```
MIT License

Copyright (c) 2026 Farhan Khalid

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
```

---

## 🌟 Star This Repo

If you found this project helpful, please consider giving it a ⭐ on GitHub — it really helps!

---

<p align="center">Made with ❤️ in India — connecting clients and developers, one project at a time</p>

## School Management System

This project is a **basic school management system** developed using only standard technologies:

- **Frontend:** HTML, CSS, JavaScript (no frameworks)
- **Backend:** PHP
- **Database:** PostgreSQL
- **Architecture:** Modular and minimal, designed for learning and easy maintenance

---

### 📂 Folder Structure

```
project-root/
│
├── public/
│   ├── index.html       # Main frontend page
│   ├── styles.css       # Custom CSS styling
│   ├── app.js           # Frontend logic using fetch API
│   └── api.php          # Main API router (receives requests from frontend)
│
├── src/
│   ├── api/
│   │   ├── get_students.php  # Sample endpoint (e.g., return student data)
│   │   └── test.php          # Test endpoint
│   └── functions/
│       └── http.php          # Helper functions (e.g., send JSON responses)
│
├── doc/
│   └── .obsidian/       # Obsidian vault configuration (for notes/documentation)
│
└── README.md            # Project info and documentation

```

---

### 🔁 How It Works

- The **frontend (`index.html`)** sends HTTP requests using `fetch()` to the script `api.php`.
- The file `api.php` acts as a **router**, dynamically calling internal PHP scripts from the `/src/api/` folder based on the query parameter `?e=...`.
- Each endpoint script (e.g., `get_students.php`) must return a callable function, which `api.php` will execute and return as a JSON response.
- The folder `/src/functions/` holds reusable utility functions, such as `http_send_json()`.

---

### ✅ Goals

- Teach basic **API routing** in PHP without frameworks
- Practice **modular architecture**
- Demonstrate frontend-backend communication using native JS `fetch`
- Introduce usage of **PostgreSQL with PHP** (to be added in next steps)
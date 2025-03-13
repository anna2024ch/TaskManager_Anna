# 🚀 Task Management App 🚀

## 📜 Projektbeschreibung

Dies ist eine Webanwendung zur Aufgabenverwaltung, die es Benutzern ermöglicht, Aufgaben über CRUD-Operationen zu verwalten. Benutzer können Aufgaben erstellen, bearbeiten, löschen (weiches Löschen) und eine Liste von Aufgaben anzeigen. Die Anwendung ermöglicht die Erstellung von Aufgaben mit Titeln, Beschreibungen und einem Status für die Erledigung. Sie wurde mit Laravel entwickelt und folgt der MVC-Architektur.

## ⚙️ Funktionen

### Benutzerauthentifizierung
- Anmeldung und Registrierung von Benutzern.

### Aufgabenverwaltung
- Erstellen einer neuen Aufgabe mit Titel und Beschreibung.
- Bearbeiten und Aktualisieren einer bestehenden Aufgabe.
- Weiches Löschen einer Aufgabe.
- Anzeigen der Liste aller Aufgaben mit deren Status (erledigt oder offen).

### Statusverwaltung von Aufgaben
- Markieren von Aufgaben als erledigt oder offen.

## 🗄 Projektstruktur

| Ebene         | Beschreibung |
|--------------|--------------|
| `Modelle`    | Enthält das `Task`-Modell zur Interaktion mit der Datenbank sowie das `User`-Modell für die Benutzerauthentifizierung. |
| `Controller` | Der `TaskController` verwaltet die CRUD-Operationen für Aufgaben. |
| `Views`      | Blade-Templates zur Anzeige, Erstellung, Bearbeitung und Auflistung von Aufgaben. |
| `Routen`     | Ressourcendefinierte Routen zur Steuerung der Aufgabenverwaltung. |
| `Migrationen` | Enthält das Datenbankschema für Aufgaben mit Feldern wie `titel`, `beschreibung` und `erledigt`. |
| `Authentifizierung` | Das User-Modell kümmert sich um die Benutzerauthentifizierung, Passwort-Hashing und Anmeldefunktionalität. |

## 💻 Technologien

- PHP 8.1+ für serverseitige Skripterstellung.
- Laravel 9 Framework für MVC-Struktur und Routing.
- MySQL als Datenbank.
- Bootstrap 5 für das Front-End-Design.
- Blade Templating-Engine für die dynamische Inhaltserstellung.

## 🛠 Installation

### Projekt klonen
```bash
git clone https://github.com/your-username/task-manager.git
cd task-manager
```

### Abhängigkeiten installieren
Stelle sicher, dass Composer installiert ist, und führe dann aus:
```bash
composer install
```

### Umgebung einrichten
Kopiere die `.env.example`-Datei nach `.env`:
```bash
cp .env.example .env
```

### Datenbank konfigurieren
Aktualisiere die `.env`-Datei mit deinen Datenbank-Anmeldedaten:
```makefile
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

### Migrationen ausführen
```bash
php artisan migrate
```

### Daten (optional) seeden
```bash
php artisan db:seed
```

### Entwicklungsserver starten
```bash
php artisan serve
```

## 🧑‍💻 Verzeichnisstruktur

```plaintext
app/
├── Http/
│   ├── Controllers/
│   │   └── TaskController.php
│   └── Middleware/
│
├── Models/
│   ├── Task.php
│   └── User.php
│
database/
├── migrations/
│   └── create_tasks_table.php
└── seeders/
    └── DatabaseSeeder.php
resources/
├── views/
│   ├── tasks/
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   │   └── index.blade.php
│   └── layouts/
│       └── app.blade.php
routes/
└── web.php
```

## 📅 Routen

| Methode | Route | Beschreibung |
|---------|-------|--------------|
| GET | `/tasks` | Alle Aufgaben anzeigen. |
| GET | `/tasks/create` | Formular zum Erstellen einer neuen Aufgabe anzeigen. |
| POST | `/tasks` | Eine neue Aufgabe speichern. |
| GET | `/tasks/{task}/edit` | Formular zum Bearbeiten einer bestehenden Aufgabe anzeigen. |
| PUT/PATCH | `/tasks/{task}` | Die Aufgabe aktualisieren. |
| DELETE | `/tasks/{task}` | Die Aufgabe löschen. |



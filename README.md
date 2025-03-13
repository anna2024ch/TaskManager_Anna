🚀 Task Management App 🚀
📜 Projektbeschreibung:
Dies ist eine Webanwendung zur Aufgabenverwaltung, die es Benutzern ermöglicht, Aufgaben über CRUD-Operationen zu verwalten. Benutzer können Aufgaben erstellen, bearbeiten, löschen (weiches Löschen) und eine Liste von Aufgaben anzeigen. Die Anwendung ermöglicht die Erstellung von Aufgaben mit Titeln, Beschreibungen und einem Status für die Erledigung. Sie wurde mit Laravel entwickelt und folgt der MVC-Architektur.

⚙️ Funktionen:
Benutzerauthentifizierung: Anmeldung und Registrierung von Benutzern.
Aufgabenverwaltung:
Erstellen einer neuen Aufgabe mit Titel und Beschreibung.
Bearbeiten und Aktualisieren einer bestehenden Aufgabe.
Weiches Löschen einer Aufgabe.
Anzeigen der Liste aller Aufgaben mit deren Status (erledigt oder offen).
Statusverwaltung von Aufgaben:
Markieren von Aufgaben als erledigt oder offen.
🗄 Projektstruktur:
Ebene	Beschreibung
Modelle	Das Task-Modell interagiert mit der Datenbank und speichert sowie ruft Aufgabendaten ab. Das User-Modell kümmert sich um die Benutzerauthentifizierung.
Controller	Der TaskController verwaltet die CRUD-Operationen für Aufgaben.
Views	Blade-Templates zum Anzeigen von Aufgaben und Bearbeiten der Aufgabenoperationen (erstellen, bearbeiten, auflisten).
Routen	Ressourcenrouten für Aufgaben mit Methoden zum Anzeigen, Erstellen, Bearbeiten und Löschen von Aufgaben.
Migrationen	Datenbankschema für Aufgaben, einschließlich Felder wie titel, beschreibung und erledigt.
Authentifizierung	Das User-Modell kümmert sich um die Benutzerauthentifizierung, Passwort-Hashing und Anmeldefunktionalität.
💻 Technologien:
PHP 8.1+ für serverseitige Skripterstellung.
Laravel 9 Framework für MVC-Struktur und Routing.
MySQL als Datenbank.
Bootstrap 5 für das Front-End-Design.
Blade Templating-Engine für die dynamische Inhaltserstellung.
🛠 Installation:
Projekt klonen:

bash
Kopieren
Bearbeiten
git clone https://github.com/your-username/task-manager.git
cd task-manager
Abhängigkeiten installieren: Stelle sicher, dass Composer installiert ist, und führe dann aus:

nginx
Kopieren
Bearbeiten
composer install
Umgebung einrichten: Kopiere die .env.example-Datei nach .env:

bash
Kopieren
Bearbeiten
cp .env.example .env
Datenbank konfigurieren: Aktualisiere die .env-Datei mit deinen Datenbank-Anmeldedaten:

makefile
Kopieren
Bearbeiten
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
Migrationen ausführen: Erstelle das Datenbankschema, indem du die Migration ausführst:

nginx
Kopieren
Bearbeiten
php artisan migrate
Daten (optional) seeden: Du kannst die Datenbank mit Beispieldaten füllen:

nginx
Kopieren
Bearbeiten
php artisan db:seed
Entwicklungsserver starten:

nginx
Kopieren
Bearbeiten
php artisan serve
Nun kannst du die App unter http://127.0.0.1:8000 aufrufen.

🧑‍💻 Verzeichnisstruktur:
pgsql
Kopieren
Bearbeiten
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
📅 Routen:
GET /tasks - Alle Aufgaben anzeigen.
GET /tasks/create - Formular zum Erstellen einer neuen Aufgabe anzeigen.
POST /tasks - Eine neue Aufgabe speichern.
GET /tasks/{task}/edit - Formular zum Bearbeiten einer bestehenden Aufgabe anzeigen.
PUT/PATCH /tasks/{task} - Die Aufgabe aktualisieren.

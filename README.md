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
Nun kannst du die App unter [http://127.0.0.1:8000](http://127.0.0.1:8000) aufrufen.

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

## 📸 Screenshots

- **Formular zum Erstellen einer Aufgabe**: Ein einfaches Formular zur Erstellung einer neuen Aufgabe mit Titel und Beschreibung.
- **Aufgabenliste**: Eine Liste, die alle Aufgaben anzeigt, mit Optionen zum Bearbeiten, Löschen und Markieren als erledigt.

## ✨ Verbesserungen

- **Formularvalidierung**: Alle Formulare verwenden die integrierte Laravel-Validierung für das Feld `titel` und optional für `beschreibung`.
- **Fehlerbehandlung**: Fehler werden mithilfe der Bootstrap-Alert-Klassen angezeigt, wenn die Formularvalidierung fehlschlägt.
- **UI**: Benutzerfreundliche Benutzeroberfläche zur Verwaltung von Aufgaben mit Bootstrap 5-Komponenten.

## 📝 Beispielcode

### TaskController.php
```php
public function store(Request $request)
{
    $request->validate([
        'titel' => 'required|max:255',
        'beschreibung' => 'nullable'
    ]);

    Task::create($request->all());
    return redirect()->route('tasks.index')->with('erfolg', 'Aufgabe erstellt!');
}
```

### Task Modell
```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['titel', 'beschreibung', 'erledigt'];
}
```

### Create Task View (create.blade.php)
```blade
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="titel" class="form-label">Titel</label>
        <input type="text" class="form-control @error('titel') is-invalid @enderror" id="titel" name="titel" value="{{ old('titel') }}">
        @error('titel')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Speichern</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Zurück</a>
</form>
```

## 🏁 Fazit

Diese Laravel-Aufgabenverwaltungs-App bietet eine solide Grundlage für die Verwaltung von Aufgaben mit vollständigen CRUD-Funktionalitäten. Sie ist leicht erweiterbar und anpassbar, um verschiedene Bedürfnisse zu erfüllen. Du kannst Funktionen wie Benutzerrollen, Auf

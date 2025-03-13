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

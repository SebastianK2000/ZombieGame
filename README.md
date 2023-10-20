# Zombie Simulation PHP Application

ENG

This is a simple PHP application for simulating a zombie outbreak scenario. It includes PHP code to manage the simulation, a PostgreSQL database for storing data, and a Docker configuration for easy setup and deployment.

## Requirements

- Docker: Make sure you have Docker installed on your system.

<<<<<<< HEAD
=======
## Setup

1. Clone this repository to your local machine.

2. In the project root directory, create a `.env` file with the following PostgreSQL configuration. Replace the placeholders with your desired values:
>>>>>>> 5154a377ad539019c60c7cc0baa6909615b5abf0

   ```env
   POSTGRES_DB=ZombieSimulation
   POSTGRES_USER=admin
   POSTGRES_PASSWORD=admin

   
Build and start the Docker containers using the following command:

docker-compose up -d

This will start the Apache and PostgreSQL containers.

<<<<<<< HEAD
W katalogu projektu użyj komedny "docker-compose up" 
=======
Access the application in your web browser at http://localhost.

Usage
The main PHP code for the zombie simulation is located in the index.php file. You can modify and expand this code to create your own simulation scenarios.

The PostgreSQL database stores data related to the simulation. You can access it from within your PHP code by using the provided configuration.

The docker-compose.yml file defines the Docker services and containers for Apache and PostgreSQL. You can customize this file to fit your specific requirements.

Troubleshooting
If you encounter issues with the application, check the logs for the Apache and PostgreSQL containers for error messages.

If you get a "Forbidden" error, ensure that file and directory permissions are set correctly. You can use the chmod command to adjust permissions as needed.

-----------------------------------------------

# Aplikacja PHP symulująca zombie

PL

Jest to prosta aplikacja PHP do symulacji scenariusza epidemii zombie. Zawiera kod PHP do zarządzania symulacją, bazę danych PostgreSQL do przechowywania danych oraz konfigurację Docker dla łatwej konfiguracji i wdrożenia.

## Wymagania

- Docker: Upewnij się, że masz zainstalowany Docker w swoim systemie.

## Konfiguracja

1. Sklonuj to repozytorium na swój komputer lokalny.

2. W katalogu głównym projektu utwórz plik `.env` z następującą konfiguracją PostgreSQL. Zastąp symbole zastępcze pożądanymi wartościami:

   ``env
   POSTGRES_DB=ZombieSimulation
   POSTGRES_USER=admin
   POSTGRES_PASSWORD=admin

   
Zbuduj i uruchom kontenery Docker za pomocą następującego polecenia:

docker-compose up -d

Spowoduje to uruchomienie kontenerów Apache i PostgreSQL.

Dostęp do aplikacji można uzyskać w przeglądarce internetowej pod adresem http://localhost.

Użycie
Główny kod PHP symulacji zombie znajduje się w pliku index.php. Kod ten można modyfikować i rozszerzać w celu tworzenia własnych scenariuszy symulacji.

Baza danych PostgreSQL przechowuje dane związane z symulacją. Dostęp do niej można uzyskać z poziomu kodu PHP za pomocą dostarczonej konfiguracji.

Plik docker-compose.yml definiuje usługi i kontenery Docker dla Apache i PostgreSQL. Plik ten można dostosować do własnych wymagań.

Rozwiązywanie problemów
Jeśli napotkasz problemy z aplikacją, sprawdź dzienniki kontenerów Apache i PostgreSQL pod kątem komunikatów o błędach.

Jeśli pojawi się błąd "Forbidden", upewnij się, że uprawnienia do plików i katalogów są ustawione poprawnie. Możesz użyć polecenia chmod, aby dostosować uprawnienia w razie potrzeby.

>>>>>>> 5154a377ad539019c60c7cc0baa6909615b5abf0

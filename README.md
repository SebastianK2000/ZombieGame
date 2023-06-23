ENG: 

Zombie simulation in php using PostgreSQL Apache server and Docker Compose. 

Clone the repository: git clone (then enter the repo address)
Navigate to the project directory: cd (ZombieGame(Using the command line, of course))
Make sure you have Docker installed on your computer.
Build a Docker image based on the Dockerfile: docker build -t name_image .
Run the container based on the Docker image: docker run -p 8080:80 image_name
The application should be available at http://localhost:8080

Use the PostgreSQL database to connect it to the PHP file and configure the connection in the configuration file. 

In the project directory use the "docker-compose up" command. 

PS. I would like to add that unfortunately I did not manage to fully refine the task by which I could not deal with one error during startup. I hope that with you this error will not happen.



PL:

Symulacja zombie w php przy użyciu PostgreSQL serwera Apache oraz Docker Compose. 

Sklonuj repozytorium: git clone (nastęnie podaj adres repo)
Przejdź do katalogu projektu: cd (ZombieGame(Oczywiście przy użyciu wiersza poleceń))
Upewnij się, że masz zainstalowanego Dockera na swoim komputerze.
Zbuduj obraz Dockera na podstawie pliku Dockerfile: docker build -t nazwa_obrazu .
Uruchom kontener na podstawie obrazu Dockera: docker run -p 8080:80 nazwa_obrazu
Aplikacja powinna być dostępna pod adresem http://localhost:8080

Użyj bazy danych PostgreSQL aby połączyć ją z plikiem PHP oraz skonfiguruj połączenie w pliku konfiguracyjnym. 

W katalogu projektu użyj komedny "docker-compose up" 

PS. chciałbym dodać że niestety nie zdążyłem w pełni dopracować zadania przez co nie mogłem się uporać z jednym błędem podczas uruchomiania. Liczę że u Państwa ten błąd nie będzie miał miejsca. 


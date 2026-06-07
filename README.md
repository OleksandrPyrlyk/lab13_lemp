# PAwChO Lab 13 + 13D

## Struktura projektu

[SCREENSHOT_1]

<img width="179" height="280" alt="image" src="https://github.com/user-attachments/assets/3749e42f-13ae-4eb8-8cca-bed6afd0afd3" />

## Uruchomienie środowiska

### Uruchomienie kontenerów

```bash
docker compose up -d
```

Wynik:

<img width="903" height="226" alt="image" src="https://github.com/user-attachments/assets/cfacdd60-4654-420c-a971-875fc727ebf5" />

### Lista kontenerów

```bash
docker compose ps
```

Wynik:

<img width="898" height="152" alt="image" src="https://github.com/user-attachments/assets/63c6ce23-9e2d-476a-a764-0c3672905c9b" />

---

## Weryfikacja działania aplikacji

### Strona główna

Adres:

```text
http://localhost:4001
```

Wynik:

<img width="636" height="245" alt="image" src="https://github.com/user-attachments/assets/b8f797a7-def7-4673-82e3-c0391f6f826e" />

### phpMyAdmin

Adres:

```text
http://localhost:6001
```

Wynik:

<img width="711" height="342" alt="image" src="https://github.com/user-attachments/assets/78ba994d-55b5-4ee6-a218-d01f2ac4dea6" />

---

## Weryfikacja bazy danych

### Lista baz danych

```bash
docker compose exec mysql mysql -u lab13user -puser123 -e "SHOW DATABASES;"
```

Wynik:

<img width="714" height="148" alt="image" src="https://github.com/user-attachments/assets/d30a8594-bc2d-4885-8f8b-882db66b618b" />

### Odczyt danych testowych

```bash
docker compose exec mysql mysql -u lab13user -puser123 lab13db -e "SELECT * FROM test_messages;"
```

Wynik:

<img width="865" height="118" alt="image" src="https://github.com/user-attachments/assets/9dc5db1b-218c-4ce4-a84f-fc9db3d038e5" />

---

# Laboratorium 13D

## Docker Secrets

Utworzone sekrety:

* mysql_database
* mysql_user
* mysql_password
* mysql_root_password

### Katalog secrets

<img width="236" height="107" alt="image" src="https://github.com/user-attachments/assets/8674fbcf-b80b-427e-a596-2066a0a56eb6" />

### Konfiguracja secrets w docker-compose.yml

<img width="478" height="244" alt="image" src="https://github.com/user-attachments/assets/bf08f29c-4d59-4b0a-9c0a-da49f2d050ec" />

<img width="339" height="176" alt="image" src="https://github.com/user-attachments/assets/f5149e05-e3a2-4120-ae48-b2c893f2b878" />


### Potwierdzenie montowania secrets

```bash
docker inspect lab13_mysql
```

Wynik:

<img width="640" height="361" alt="image" src="https://github.com/user-attachments/assets/6fb5ece2-53e5-440f-a1df-e278d6bd3e67" />

---

# Laboratorium 14 — mechanizm merge

W zadaniu dodatkowym zastosowano mechanizm merge Docker Compose.

## Plik bazowy:

```text
docker-compose.yml
```

## Plik override

```text
docker-compose.override.yml
```

## Uruchomienie

Docker Compose automatycznie łączy oba pliki przy użyciu polecenia:

```bash
docker compose up -d
```

## Potwierdzenie działania po podziale konfiguracji

```bash
docker compose ps
```

Wynik:

<img width="912" height="156" alt="image" src="https://github.com/user-attachments/assets/22649003-cdb6-459d-b65c-625f5fd55587" />

## Wnioski

Utworzono środowisko LEMP składające się z usług Nginx, PHP-FPM, MySQL oraz phpMyAdmin. Aplikacja została uruchomiona przy pomocy Docker Compose. Dane wrażliwe zostały przeniesione do Docker Secrets i zamontowane w kontenerze MySQL zgodnie z wymaganiami laboratorium.

Dodatkowo w ramach zadania z Laboratorium 14 zastosowano mechanizm merge Docker Compose poprzez podział konfiguracji na plik bazowy docker-compose.yml oraz plik docker-compose.override.yml. Potwierdzono poprawne działanie środowiska po scaleniu obu plików konfiguracyjnych.

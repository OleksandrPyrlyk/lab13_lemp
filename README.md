# PAwChO Lab 13 + 13D

## Autor

Imię i nazwisko: ....................................

Nr albumu: ....................................

---

## Cel ćwiczenia

Celem laboratorium było utworzenie środowiska LEMP z wykorzystaniem Docker Compose oraz konfiguracja danych wrażliwych przy użyciu Docker Secrets.

---

## Struktura projektu

[SCREENSHOT_1]

---

## Docker Compose

Plik docker-compose.yml:

[SCREENSHOT_2]

---

## Uruchomienie środowiska

### Uruchomienie kontenerów

```bash
docker compose up -d
```

Wynik:

[SCREENSHOT_3]

### Lista kontenerów

```bash
docker compose ps
```

Wynik:

[SCREENSHOT_4]

---

## Weryfikacja działania aplikacji

### Strona główna

Adres:

```text
http://localhost:4001
```

Wynik:

[SCREENSHOT_5]

### phpMyAdmin

Adres:

```text
http://localhost:6001
```

Wynik:

[SCREENSHOT_6]

---

## Weryfikacja bazy danych

### Lista baz danych

```bash
docker compose exec mysql mysql -u lab13user -puser123 -e "SHOW DATABASES;"
```

Wynik:

[SCREENSHOT_7]

### Odczyt danych testowych

```bash
docker compose exec mysql mysql -u lab13user -puser123 lab13db -e "SELECT * FROM test_messages;"
```

Wynik:

[SCREENSHOT_8]

---

# Laboratorium 13D

## Docker Secrets

Utworzone sekrety:

* mysql_database
* mysql_user
* mysql_password
* mysql_root_password

### Katalog secrets

[SCREENSHOT_9]

### Konfiguracja secrets w docker-compose.yml

[SCREENSHOT_10]

### Potwierdzenie montowania secrets

```bash
docker inspect lab13_mysql
```

Wynik:

[SCREENSHOT_11]

---

## Wnioski

Utworzono środowisko LEMP składające się z usług Nginx, PHP-FPM, MySQL oraz phpMyAdmin. Aplikacja została uruchomiona przy pomocy Docker Compose. Dane wrażliwe zostały przeniesione do Docker Secrets i zamontowane w kontenerze MySQL zgodnie z wymaganiami laboratorium.

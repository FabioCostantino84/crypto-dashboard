# DESCRIZIONE

#### Questo progetto è un esercizio pratico sviluppato con Laravel per mettere in atto le competenze basilari di programmazione web, senza l’utilizzo di strumenti di AI o tecniche di “vibe coding”.

### L’applicazione consente di:
- Cercare e salvare criptovalute provenienti da un servizio esterno (CoinGecko).
- Registrare i prezzi giornalieri di ciascuna coin in un intervallo di date.
- Visualizzare statistiche di base come media, minimo e massimo dei prezzi.

### Attraverso questo esercizio vengono messi in evidenza alcuni concetti fondamentali della programmazione:
- Strutturazione di un database relazionale con tabelle collegate.
- Uso delle migration e dei model di Laravel.
- Integrazione con API esterne.
- Gestione di dati temporali e calcolo di statistiche.
- Validazione dei dati tramite Form Request.

## SETUP PROGETTO

1. **Clonazione repo e installazione dipendenze**
```bash
git clone https://github.com/FabioCostantino84/crypto-dashboard.git
cd crypto-dashboard
composer install
npm install
```

2. **Creazione DB**
```bash
mysql -u root -p
CREATE DATABASE laravel_crypto;
CREATE USER 'laravel'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON laravel_crypto.* TO 'laravel'@'localhost';
FLUSH PRIVILEGES;
exit;
```

* **Aggiornare file .env**
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_crypto
DB_USERNAME=laravel
DB_PASSWORD=123456

3. **Creazione migration + migration**
```bash
php artisan make:migration create_coins_table
php artisan make:migration create_prices_table
php artisan migrate
```




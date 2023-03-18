# main-theme-base

# Installazione semi-automatica

* Scaricare zip progetto (non fare clone) e fare unzip
* Creare nuovo repository su github per il nuovo progetto
* Fare clone del repository appena creato su una nuova cartella
* Dentro tale cartella copiare il contenuto dello zip precedente unzippato
* Aprire la cartella su terminale di visual studio code (oppure su terminale normale)
* Eseguire

`sh wp.sh`

* Compilare le informazioni richieste e attendere installazione wordpress
* Su db creare database
* su wp-admin impostare main-theme come tema

# Installazione manuale

## Progetto da copiare ed usare come progetto iniziale

# Inizio indicazioni utilizzo main-theme-base

* Scaricare zip progetto (non fare clone) e tenerlo da parte

<img width="931" alt="downloadZip" src="https://user-images.githubusercontent.com/70835436/158892232-8fd3e611-5b1d-48da-a50b-a93783e134bd.png">

* Creare nuovo repository su github per il nuovo progetto
* Fare clone del repository appena creato
* Scaricare nuova versione di wordpress
* Nella cartella del nuovo progetto appena creato copiare TUTTI i file di wordpress
* Successivamente fare unzip di questo progetto scaricato precedentemente e copiare questi file dentro la nuova cartella sovrascrivendo i file in conflitto
* Accertarsi che venga copiato anche il file `.gitignore`
* Nel readme.md rinominare il titolo iniziale
* Nel readme.md rimuovere il testo da `Inizio indicazioni utilizzo main-theme-base` a `Fine indicazioni utilizzo main-theme-base`

# Fine indicazioni utilizzo main-theme-base


## ATTENZIONE!
Per eseguire i vari comandi da riga di comando si deve essere posizionati nella cartella  `wp-content/themes/main-theme` eseguendo dalla root del progetto:

```
cd wp-content/themes/main-theme
```


# In sviluppo (CON WEBPACK)

### ATTENZIONE: Per i comandi descritti in seguito, posizionarsi nella cartella del tema
```
cd wp-content/themes/main-theme
```

Dopo un pull, se si hanno libreria diverse nel package.json, eseguire:
```
npm update
```

oppure

```
npm install
```

Eseguire
```
npm run dev
```

# Per rilascio su server

* Assicurarsi di aver eseguito il comando per convertire il typescript in javascript
* Assicurarsi di aver eseguito il comando per convertire il scss in css
* In style.css devono esserci i commenti che descrivono il tema

## Usando webpack
Eseguire 
```
npm run prod
```

# Per eseguire build, commit e push
1. Eseguire 

```
npm run push
```

2. Premere 'y' e invio

3. Scrivere il commento per il commit

4. Premere invio ed attendere la fine del processo

Per annullare premere `ctrl + C`


# Plugin wordpress installati

* Advanced Custom Fields

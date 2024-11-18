# Webová komunikace mezi skripty

Tento projekt demonstruje čtyři způsoby, jak předávat hodnoty mezi dvěma PHP skripty.

## Způsoby předání hodnoty:

1. **GET metoda (URL parametry)**:
   - Hodnota je předána jako součást URL (v parametru).
   - Příklad: `b.php?number=42`
   - Tento způsob je jednoduchý, ale hodnota je viditelná v URL, což není ideální pro citlivé informace.

2. **POST metoda (formulář)**:
   - Hodnota je předána pomocí POST požadavku. V tomto případě je hodnota skrytá v těle HTTP požadavku.
   - Příklad: Formulář na stránce `a.php` odesílá hodnotu na `b.php`.
   - Tento způsob je bezpečnější než GET, protože hodnota není viditelná v URL.

3. **Cookies**:
   - Hodnota je uložena v cookies a může být přístupná mezi různými stránkami na stejném webu.
   - Příklad: Hodnota je uložena v cookie a odeslána na stránku `b.php`.
   - Tento způsob může být použit pro uložení hodnoty pro opakované použití, ale pro citlivé informace je lepší je šifrovat.

4. **Session**:
   - Hodnota je uložena na serveru ve session a je přístupná mezi stránkami, dokud session nevyprší nebo není uzavřena.
   - Příklad: Hodnota je uložena v session a předána na stránku `b.php`.
   - Tento způsob je ideální pro uchovávání dat mezi stránkami a je bezpečný, protože data jsou uložena na serveru.

## Použití

1. Otevřete `a.php` v prohlížeči.
2. Zobrazí se vygenerované náhodné číslo.
3. Můžete si vybrat jeden z uvedených způsobů, jak hodnotu poslat na stránku `b.php`, kde bude zobrazeno přijaté číslo.

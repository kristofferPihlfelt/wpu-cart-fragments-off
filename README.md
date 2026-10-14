# WPU Cart Fragments Off

Gratis plugin från [wordpressutveckling.se](https://wordpressutveckling.se/). Koden förklaras rad för rad i guiden: **[https://wordpressutveckling.se/varfor-ar-min-woocommerce-butik-langsam/](https://wordpressutveckling.se/varfor-ar-min-woocommerce-butik-langsam/)**

Byggt av [Kristoffer Pihlfelt](https://pihlfelt.se) på [Pihlfelt & Vänner](https://pihlfelt.se). Licens: GPL-2.0-or-later.

- **Bidragsgivare:** Pihlfelt & Vänner
- **Kräver WordPress:** 6.7
- **Kräver PHP:** 8.2
- **Kräver:** WooCommerce
- **Version:** 1.0.0
- **Licens:** GPL-2.0-or-later

## Vad det gör

Tar bort WooCommerce-skriptet wc-cart-fragments på alla sidor utom varukorg och kassa. Skriptet gör ett AJAX-anrop till servern på varje sidvisning för att uppdatera minivarukorgen, även på sidor som annars kommer direkt ur sidcachen. Utan det blir cachade sidor snabbare och servern får färre anrop.

Gäller den klassiska varukorgswidgeten och minivarukorgen i klassiska teman. Minivarukorgsblocket (Mini-Cart) i blockteman använder inte skriptet, så där gör pluginet ingen skillnad.

Priset: en minivarukorg i sidhuvudet uppdateras inte av sig själv på en cachad sida. Efter ett AJAX-köp uppdateras den ändå, eftersom svaret från "lägg i varukorg" innehåller fragmenten. AJAX-endpointen get_refreshed_fragments finns kvar för plugin som anropar den själva.

## Installation

1. Kontrollera att WooCommerce är aktiverat.
2. Gå till Tillägg > Lägg till nytt > Ladda upp tillägg och välj zip-filen. Aktivera.
3. Det finns inga inställningar. Töm sidcachen och kontrollera att minivarukorgen beter sig som du vill.

## Källa

Koden förklaras i guiden "Varför är min WooCommerce-butik långsam?":
https://wordpressutveckling.se/varfor-ar-min-woocommerce-butik-langsam/

Den senaste versionen finns alltid på samma adress:
https://wordpressutveckling.se/ladda-ner/wpu-cart-fragments-off/

## Ändringslogg

### 1.0.0
* Första versionen, samma kod som i guiden.

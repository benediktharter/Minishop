Minishop
========

Cart module  plugin for Monstra cms

### Instructions:

---

- Copy minishop folder in plugins folder.
- Copy theme templates in theme folder.
- Create 3 pages like this.
- Shop ( slug = **shop** ) - **products.template.php**
    - Product ( slug = **item** ) - **product.template.php**
    - Total ( slug = **items** ) - **total.template.php**
- Add Cart code in menu  

        <?php echo miniShop::getInfo(); ?>

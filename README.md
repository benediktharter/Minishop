Minishop
========

Cart module  plugin for Monstra cms

### Instructions:

---

- Copy minishop folder in plugins folder.
- Copy theme templates in theme folder.
- Create 3 pages like this.
- Shop ( slug = **shop** ) - **products.template.php**  
    - Product ( slug = **item** ) - **product.template.php** Parent of shop
    - Total ( slug = **items** ) - **total.template.php** Parent of shop
- Add Cart code in menu  

        <?php echo miniShop::getInfo(); ?>
        


**Demo** [Here](http://nakome.com/monstra/shop)

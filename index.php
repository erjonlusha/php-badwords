 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $badword = $_GET["badword"];
    $testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed corporis reiciendis nisi illo repellat a consectetur rerum deserunt eos cumque dolores eveniet, earum temporibus id debitis corrupti, iusto eum? Deleniti.
    Placeat eius iure harum totam fugit ipsam commodi, animi error, voluptatum, tempora officiis numquam ex nemo. Hic, optio, amet perferendis consequatur iusto explicabo aspernatur vel saepe error voluptatibus quidem labore.
    Minus impedit libero vitae atque quibusdam voluptate odio excepturi in porro. Fuga a possimus in, velit provident rem, saepe excepturi, facilis libero laudantium exercitationem dolorem aliquam. Sequi eius veniam et?
    Repellendus corporis quae rerum eos voluptates itaque non tempora, molestias accusantium placeat natus consequuntur necessitatibus fugiat ipsum nam recusandae quis nisi neque excepturi minima facilis reprehenderit exercitationem ducimus. Molestias, corrupti?
    Quidem earum provident quo. Eos hic, amet veritatis expedita odio dignissimos quibusdam laborum explicabo porro iste ut maiores, ipsa recusandae eaque rerum sapiente eveniet at quam dicta. Rem, velit ipsum.
    Aspernatur accusantium minus sint distinctio odit ipsam libero, veniam repudiandae. Iusto, soluta, quia assumenda veniam itaque explicabo aut similique architecto labore veritatis ducimus magnam adipisci cum voluptas consequuntur quo qui?
    Ab voluptatibus veritatis ipsa, modi unde molestiae corrupti porro commodi, animi illo expedita atque, et perferendis minima. Error illo quae quas sapiente doloribus laboriosam animi impedit quod voluptatem. Autem, molestias.
    Neque rerum, fugit, expedita, tempora optio modi veniam perspiciatis sint fugiat explicabo eaque veritatis! Est, provident! Fugit deleniti, velit quis, rem doloremque sed iste sit aspernatur iure voluptatem fugiat optio?
    Sequi impedit beatae quasi ex exercitationem dignissimos ipsa perferendis tempora temporibus facere adipisci a officia dolor, nostrum animi quisquam, amet earum laboriosam minima sed molestias, dolorum placeat? Rem, dolorem totam!
    At quia sunt sit veritatis tempore ut distinctio ullam nihil inventore architecto dignissimos, cupiditate cum quod, saepe commodi exercitationem eum! Vitae ullam, minus optio similique minima consequuntur? Maiores, quisquam atque.
    Non in voluptatum nisi explicabo deserunt expedita ipsam nam pariatur similique, laborum beatae illum suscipit perspiciatis consectetur aut fugit delectus voluptates eaque harum quod voluptas. Rerum necessitatibus aliquid inventore fuga?
    Aliquid ex voluptatum tempore impedit inventore natus facere distinctio tempora repellendus sint architecto, sit vitae reprehenderit officiis magnam nisi temporibus neque officia dolorum. Sequi debitis dolore aperiam iusto! Aliquam, in!
    Officia quasi excepturi ipsa nulla veritatis omnis nisi saepe nesciunt, quidem hic mollitia voluptas, atque nostrum quisquam distinctio! Id ex dolores fugiat ullam amet impedit cum, eligendi totam nulla assumenda.
    Reprehenderit ipsa quas quia consectetur ab officiis minima tempore facere quis. Eaque, adipisci molestiae? Quo corrupti natus ratione fuga laborum fugit voluptatum repudiandae similique! Eaque ipsa beatae voluptates delectus autem?
    Repellendus quisquam pariatur temporibus sequi atque iste iusto, commodi culpa corporis, quasi cum aut aspernatur, fuga eaque reprehenderit ducimus animi dolores distinctio fugiat. Repellendus labore deleniti commodi ea, hic consectetur.
    Cum voluptate alias quos nostrum. Fuga accusamus distinctio, in, unde commodi consectetur iste quis quisquam id pariatur a et ullam maxime rem natus? Numquam impedit necessitatibus omnis, quis voluptatum assumenda!
    Quia assumenda asperiores nemo quibusdam ducimus deleniti incidunt beatae eius voluptatem minima ex, molestiae consequatur, iusto voluptatibus magnam sapiente consectetur nesciunt blanditiis, officia ullam? Ipsa facere perferendis ut unde sequi.
    Ut libero minima consequuntur dignissimos impedit, repellendus praesentium beatae tempore. Provident dolore nisi, veritatis officiis libero aut aliquid quibusdam corporis facere blanditiis consectetur reiciendis, harum voluptate repellat id inventore perferendis.
    Doloribus numquam earum veniam. Quis fugit culpa nulla facere! Impedit culpa itaque ab aspernatur doloremque aliquam asperiores, explicabo ratione odit, qui exercitationem corporis accusamus, et delectus totam maxime praesentium earum?
    Tempora labore suscipit pariatur repudiandae aliquid recusandae facilis tempore autem culpa repellendus. Dolorum a perferendis id laboriosam ipsa tempora rerum cumque obcaecati, accusamus, nesciunt deserunt sequi cum labore explicabo mollitia.";
    $noBadword = str_replace($badword," ***",$testo);
    ?>

    <h2><?php echo 'Il testo è lungo ' . strlen($noBadword) . ' caratteri.'; ?></h2>
    <p><?php echo $noBadword;?></p>
</body>
</html>
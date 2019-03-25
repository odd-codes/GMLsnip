<?php if($show_ad === True): ?>
        <?php include "ad.php"; ?>
<?php endif?>

<div class="row u-full-width footer" style="text-align:center;">
    <p>&copy; 2019 <a href="https://www.zackbanack.com?src=GMLsnip-footer" title="Zack Banack">Zack Banack</a> - This project is not associated with YoYo Games, Ltd. nor the GameMaker line of products</p>
</div>

<!-- Collapse -->
<script>
let coll = document.getElementsByClassName("coll");

for (let i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("coll-active");
    let content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
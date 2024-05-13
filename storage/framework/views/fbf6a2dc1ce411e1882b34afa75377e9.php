
<?php $__env->startSection('content'); ?>
    <div class="own-container">
        <div class="hero">
            <div class="text">
                <p class="profession">FOTOGRAF</p>
                <h2 class="name">Filip Antešević</h2>
                <p class="short-about-me">Usluge fotografisanja i snimanja za sve vrste svečanosti i promocije Vaših
                    biznisa.</p>
                <a href="/contact" class="own-button">REZERVIŠI DATUM</a>
            </div>
            <div class="image">
                <img src="<?php echo e(asset('assets/images/first-image-girl.png')); ?>" alt="Image of brides" class="bride-image">
                <img src="<?php echo e(asset('assets/images/girl-hero-section.png')); ?>" alt="Girl in field posing"
                     class="girl-hero-image">
                <img src="<?php echo e(asset('assets/images/boy-hero-section.png')); ?>" alt="Boy sitting at chair in a suit"
                     class="boy-hero-image">
            </div>
        </div>
    </div>
    <div class="own-container">
        <div class="about-me-home">
            <div class="image">
                <img src="<?php echo e(asset('assets/images/filip.png')); ?>" alt="Filip's image">
            </div>
            <div class="text">
                <div class="title">
                    <p>O MENI</p>
                    <h3>Sa kim ćete raditi?</h3>
                </div>
                <p class="about-me-desc">Ja sam Filip batonga, sprdam se i snimam i fotografisem sve vrste gengova i
                    sprdnji koji su Vam potrebne. Imam 20 godina i kidara sam i volim da koristim fotoaparat. Dobar sam
                    ovako i vozim Audi da bi pričalo selo samo.</p>
                <a href="/about-me" class="own-button">PROČITAJ VIŠE</a>
            </div>
        </div>
    </div>
    <div class="contact-reservation">
        <div class="own-container">
            <div class="title">
                <p>KONTAKT</p>
                <h3>Rezervišite datum na vreme</h3>
            </div>
            <p class="contact-desc">Kontaktiraj me što pre kako bi se dogovorili oko datuma</p>
            <a href="" class="own-button">REZERVIŠI DATUM</a>
        </div>
    </div>
    <div class="own-container">
        <div class="gallery-home">
            <div class="title">
                <p>GALERIJA</p>
                <h3>Moji najbolji projekti</h3>
                <span>Ovde možete pronaći neke od moji najboljih radova</span>
                <a href="" class="own-button">VIDI SVE RADOVE</a>
            </div>
            <div class="grid-gallery">
                <div class="small-grid">
                    <img src="<?php echo e(asset('assets/images/home_grid/grid-1.png')); ?>" alt="Girl with purple background"/>
                    <img src="<?php echo e(asset('assets/images/home_grid/grid-2.png')); ?>" alt="Group of young people"/>
                </div>

                <div class="large-grid">
                    <img src="<?php echo e(asset('assets/images/home_grid/grid-3.png')); ?>" alt="Boy in a suit sitting on a chair"/>
                    <img src="<?php echo e(asset('assets/images/home_grid/grid-4.png')); ?>"
                         alt="Girl in the forest looking over a shoulder"/>
                    <img src="<?php echo e(asset('assets/images/home_grid/grid-5.png')); ?>" alt="Girl in a room with red dress"/>
                </div>

                <img src="<?php echo e(asset('assets/images/home_grid/grid-6.png')); ?>"
                     class="big-image-boy"
                     alt="A boy who is held in the arms of other people"/>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nikola\Desktop\Laravel projects\antesevic-foto-video\resources\views/pages/home.blade.php ENDPATH**/ ?>
@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <!--
            <p class="text-lg">Give your documentation a boost with Jigsaw. <br class="hidden sm:block">Generate elegant, static docs quickly and easily.</p>
            -->
            
            <div class="flex my-10">
                <a href="/docs/purpose-statement" title="{{ $page->siteName }} documents" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Documents</a>

                <a href="docs/contact-us" title="Contact Us" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Contact Us</a>
            </div>
        </div>

        <img src="/assets/images/boco.jpg" alt="{{ $page->siteName }} book of church order" class="mx-auto mb-6 lg:mb-0 w-64">
    </div>

    <hr class="block my-8 border">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">
                Purpose Statement
            </h3>

            <p>The Federation of Reformed Churches (FORC) exists to glorify God. Its primary purpose is to serve and nurture local churches. <a href="docs/purpose-statement">Read More</a></p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
           

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">
                Our Distinctives
            </h3>

            <p>Key areas where beliefs and practices ought to be allowed, embraced and encouraged. <a href="docs/distinctives">Read More</a></p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">
                List of Churches
            </h3>
            <p>FORC Churches and contact information. <a href="docs/list-of-churches">Read More</a></p>
        </div>
    </div>


        <hr class="block my-8 border">

        <div class="center">
    <p><i>Images from the 2022 FORC Synod in Williamsville, NY.</i></p>
        </div>
        <hr class="block my-8 border lg:hidden">

    <div class="container flex flex-wrap mx-auto">
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/PaulSlish.jpg" alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/music.jpg"  alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/reading.jpg"  alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/service.jpg" alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/simeon.jpg" alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/synod1.jpg" alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/synod2.jpg"  alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/synod3.jpg"  alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/synod4.jpg"  alt="image">
        </div>
        <div class="w-full p-2 rounded lg:w-1/2 md:w-1/2">
            <img src="/assets/images/synod5.jpg"  alt="image">
        </div>

        
    </div>

            <hr class="block my-8 border">

    <div class="container flex flex-wrap mx-auto">
        <div class="p-2 rounded w-48">
            <a href="https://www.amazon.com/Anti-Paedocommunion-Biblical-Pagan-Daniel-Brown/dp/B0BCS1BLM1/ref=sr_1_1?"><img src="/assets/images/brownbook.png"  alt="image"></a>
        </div>
         <div class="p-2 rounded w-1/2">
            <p>
            "<b>Anti-Paedocommunion: Biblical or Pagan?</b>"<br>by Daniel Brown, September, 2022
            </p>
            <p>
                Why has the Reformed church clung to a tradition of barring covenant children from the Lord’s Table for 400 years and refused to seriously consider what God’s Word says on this issue? This is actually nothing new. The Scriptures and history show that churchmen have abused God’s people and withheld that which He commands for thousands of years! Eli’s sons stole sacrifices from men and raped women who came to the tabernacle to worship God (1 Sam 2:12-36). God rebuked Israel’s shepherds who “fed themselves and did not feed My flock” (Eze 34:1-10). Jesus rebuked churchmen because they “shut up the kingdom of heaven against men” and “devour widows’ houses” (Matt 23:13-14). God now rebukes us for withholding the Lord’s Table from the Good Shepherd’s little lambs!
            </p>
            <p>
                <a href="https://www.amazon.com/Anti-Paedocommunion-Biblical-Pagan-Daniel-Brown/dp/B0BCS1BLM1/ref=sr_1_1?">Available at Amazon.</a>
            </p>
        </div>       
    </div>
</section>
@endsection

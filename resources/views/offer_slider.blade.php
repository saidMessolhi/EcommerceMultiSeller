<div x-data="{
    currentSlide: 0,
    offers: [],
    init() {
        // Simulate fetching offers dynamically
        this.offers = Array.from({ length: 10 }, (_, i) => ({
            id: i + 1,
            image: `https://via.placeholder.com/300x160?text=Offer+${i + 1}`,
            title: `Product Number ${i + 1}`,
            discount: Math.floor(Math.random() * (70 - 20 + 1)) + 20 // Random for demonstration
        }));
    },
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.offers.length;
    },
    prevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.offers.length) % this.offers.length;
    }
}" x-init="init()" class="relative w-full bg-gray-100 dark:bg-gray-900 overflow-hidden">
    <!-- Offer Badge -->
    <div class="absolute top-2 right-2 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full z-20 shadow">
        🎁 Today's Offers – Hurry, time is running out!
    </div>

    <!-- Slider Container -->
    <div class="relative flex items-center justify-center h-full py-4 px-4">
        <!-- Slides -->
        <template x-for="(offer, index) in offers" :key="offer.id">
            <div x-show="index === currentSlide" class="w-full flex-shrink-0">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow p-3 flex flex-col items-center justify-center">
                    <img :src="offer.image" :alt="offer.title" class="rounded-lg h-48 w-full object-cover mb-2">
                    <h4 class="font-semibold text-lg text-gray-800 dark:text-white" x-text="offer.title"></h4>
                    <div class="text-red-600 font-bold text-xl mt-1" x-text="`Discount ${offer.discount}%`"></div>
                </div>
            </div>
        </template>

        <!-- Navigation Buttons -->
        <button @click="prevSlide()"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg z-10">
            &lt;
        </button>
        <button @click="nextSlide()"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full shadow-lg z-10">
            &gt;
        </button>
    </div>
</div>

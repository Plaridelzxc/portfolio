<div x-data="{
        projects: @js($projects),
        showViewer: false,
        activeProjectIndex: 0,
        activeImageIndex: 0,
        visible: [],

        openViewer(index) {
            this.activeProjectIndex = index;
            this.activeImageIndex = 0;
            this.showViewer = true;
        },

        closeViewer() {
            this.showViewer = false;
        },

        nextImage() {
            if (this.activeImageIndex < this.projects[this.activeProjectIndex].images.length - 1) {
                this.activeImageIndex++;
            }
        },

        prevImage() {
            if (this.activeImageIndex > 0) {
                this.activeImageIndex--;
            }
        },

        handleKey(e) {
            if (!this.showViewer) return;
            if (e.key === 'ArrowRight') this.nextImage();
            if (e.key === 'ArrowLeft') this.prevImage();
            if (e.key === 'Escape') this.closeViewer();
        }
    }" x-init="
        projects.forEach((_, i) => {
            setTimeout(() => visible.push(i), i * 140)
        })
    " @keydown.window="handleKey($event)" class="py-20 px-6 bg-gray-100 dark:bg-gray-900 min-h-screen">

    <!-- Project Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        <template x-for="(project, index) in projects" :key="index">
            <button type="button" @click="openViewer(index)" class="
                    relative block w-full text-left cursor-pointer
                    bg-white dark:bg-gray-800 rounded-2xl shadow-lg
                    hover:shadow-2xl
                    transition-all duration-700 ease-out
                " :class="[ 
                    visible.includes(index)
                        ? 'translate-x-0 opacity-100'
                        : (index % 2 === 0 ? '-translate-x-24 opacity-0' : 'translate-x-24 opacity-0')
                ]">
                <img :src="project.images[0]" :alt="project.title" class="w-full h-72 object-cover rounded-t-2xl">

                <div class="p-8">
                    <h3 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 mb-3" x-text="project.title">
                    </h3>
                    <p class="text-base text-gray-600 dark:text-gray-400" x-text="project.description"></p>
                </div>
            </button>
        </template>
    </div>

    <!-- Image Viewer Modal -->
    <div x-show="showViewer" x-transition @click.self="closeViewer" x-cloak
        class="fixed inset-0 bg-black/90 flex items-center justify-center z-50">
        <!-- Close -->
        <button @click="closeViewer" class="absolute top-6 right-6 text-white text-4xl hover:opacity-80">
            ✕
        </button>

        <!-- Prev -->
        <button @click.stop="prevImage" :disabled="activeImageIndex === 0"
            class="absolute left-6 text-white text-6xl hover:opacity-80 disabled:opacity-40">
            ‹
        </button>

        <!-- Image -->
        <div @click.stop>
            <img :src="projects[activeProjectIndex].images[activeImageIndex]"
                class="max-h-[85vh] max-w-[90vw] object-contain rounded-xl">
        </div>

        <!-- Next -->
        <button @click.stop="nextImage" :disabled="activeImageIndex === projects[activeProjectIndex].images.length - 1"
            class="absolute right-6 text-white text-6xl hover:opacity-80 disabled:opacity-40">
            ›
        </button>
    </div>

</div>
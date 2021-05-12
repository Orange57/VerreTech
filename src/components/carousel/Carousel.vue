<template>
    <div>
        <slot></slot>
    </div>
</template>

<script>
export default {
    data() {
        return {
            index: 0,
            slides: this.$children
        }
    },
    mounted () {
        this.slides = this.$children
        this.slides.forEach((slide, i) => {
            slide.index = i
        })
    }
}
</script>
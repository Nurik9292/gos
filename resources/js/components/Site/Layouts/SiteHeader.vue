<script>
import MultiLanguage from "@/components/Ui/MultiLanguage.vue";

export default {
  name: "SiteHeader",

  components: {
    MultiLanguage
  },

  data() {
    return {
      telHidden: true,
      isMobile: false,
      isActive: false,
      opacity: 1,
    }
  },

  created() {
    window.addEventListener('resize', this.checkScreenForTel);
    window.addEventListener('resize', this.checkScreenForMobile);
    window.addEventListener('scroll', this.handleScroll);
  },

  mounted() {
    this.checkScreenForMobile();
  },


  methods: {
    checkScreenForTel() {
      if (window.innerWidth < 1100)
        this.telHidden = false;
      else
        this.telHidden = true;
    },

    checkScreenForMobile() {
      if (window.innerWidth < 890)
        this.isMobile = true
      else
        this.isMobile = false
    },

    toggleHamburger() {
      this.isActive = !this.isActive;
    },

    handleScroll() {
        const scrollY = window.scrollY;
      this.opacity = Math.max(0, 1 - scrollY / 100);
    }
  },

  beforeDestroy() {
    window.removeEventListener('scroll', this.handleScroll);
  },

}
</script>

<template>
  <header v-bind:style="{ 'opacity': opacity }">
    <nav v-if="!isMobile">
      <div class="box_image">
        <img src="/image/logo.png" alt="logo">
      </div>
      <div>
        <ul>
          <li><RouterLink :to="{name: 'main'}">Главная</RouterLink></li>
          <li><a href="#carousel">Галарея</a></li>
          <li><RouterLink :to="{name: 'abouts'}">О Компании</RouterLink></li>
          <li><a href="#footer">Контакты</a></li>
          <li v-if="telHidden"> <a href="tel:+79998887766">+993 61 11-11-66</a></li>
          <li>
            <MultiLanguage></MultiLanguage>
          </li>
        </ul>
      </div>
    </nav>

    <nav v-if="isMobile">
      <div class="box_image">
        <img src="/image/logo.png" alt="logo">
      </div>
      <div class="hamburger" :class="{ active: isActive }" @click="toggleHamburger">
      <span class="patties" :class="{ active: isActive }"></span>
    </div>
    <div class="menu" v-show="isActive">
      <div class="menuwrapper">
        <ul>
          <li><RouterLink :to="{name: 'main'}">Главная</RouterLink></li>
          <li><a href="#carousel">Галарея</a></li>
          <li><RouterLink :to="{name: 'abouts'}">О Компании</RouterLink></li>
          <li><a href="#footer">Контакты</a></li>
          <li> <a href="tel:+79998887766">+993 61 11-11-66</a></li>
          <li>
            <MultiLanguage></MultiLanguage>
          </li>
        </ul>
      </div>
    </div>
    </nav>

  </header>
</template>

<style lang="scss" scoped>
header {
    height: 120px;
    background: #14d6c6;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10;
    transition: all 0.3s ease;
}

nav {
    width: 70%;
    height: auto;
    display: flex;
    flex-direction: row;
    justify-content: left;
    align-items: center;
}

.box_image {
     background-color: white;
     width: 250px;
    height: 120px;
    transform: skew(-40deg);
    margin-right: 250px;
    display: flex;
    justify-content: center;
     align-items: center;
}

img {
    width: 250px;
    display: block;
    height: 120px;
    box-sizing: border-box;
    transform: skew(40deg);
}


ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

li {
  display: inline-block;
}

li:last-child {
  margin-right: 0;
}

a {
    display: block;
    text-decoration: none;
    z-index: 1;
    font: 15px Arial sans-serif;
    font-weight: bold;
    height: 30px;
    letter-spacing: 1px;
    line-height: 30px;
    margin-right: 10px;
    padding: 10px 20px;
    color: white;
}

a:hover {
  outline: 3px solid #FFD700;
  color: #FFD700;
  outline-offset: -2px;
  transition: all 0.5s ease-in-out;
}

@media screen and (min-width: 2251px){
    img{
        width: 100px;
    }
}

@media screen and (max-width: 2250px) {

.box_image {
  margin-right: 100px;

}

img {
  width: 150px;
}
}


@media screen and (max-width: 1800px) {
    nav {
        width: 100%;
        justify-content: center;
    }
}

@media screen and (max-width: 1520px) {
  a {
    margin-right: 30px;
  }
}

@media screen and (max-width: 1300px) {
  .box_image {
    width: 250px;
    margin-right: 50px;
  }

  img {

    width: 100px;
    height: 120px;
  }

  a {
    margin-right: 15px;
  }
}

@media screen and (max-width: 900px) {

  nav {
    width: 80%;
    justify-content:space-between;
  }
}

.hamburger {
  width: 50px;
  height: 50px;
  position: relative;
  border-radius: 15px;
  transition: all 0.3s ease;
  z-index: 11;
}

.patties {
  background: #fff;
  width: 70%;
  height: 5px;
  top: calc(50% - 5px);
  display: block;
  position: absolute;
  left: 15%;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.patties::before,
.patties::after {
  content: "";
  background: #fff;
  width: 100%;
  height: 5px;
  top: 10px;
  position: absolute;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.patties::before {
  top: -10px;
}

.hamburger.active {
  background: #fff;
}

.hamburger.active .patties {
  background: transparent;
}

.hamburger.active .patties::before {
  background: #14d6c6;
  transform: rotate(45deg);
  top: 0;
}

.hamburger.active .patties::after {
  background: #14d6c6;
  transform: rotate(-45deg);
  top: 0;
}

.menuwrapper {
  top: 50%;
  position: relative;
  transform: translateY(-50%);
}

.menu {
  background: #14d6c6;
  transition: top 0.5s ease;
  display: inline-block;
  padding: 1rem;
  color: #fff;
  left: 0;
  top: 120%;
  position: absolute;
  width: calc(100% - 2rem);
  text-align: center;
  height: 500px;
  overflow-x: auto;
}

.menu ul {
  list-style: none;
  padding-left: 0;
  display: flex;
  flex-direction: column;
}

.active+.menu {
    top: 0;
}
</style>

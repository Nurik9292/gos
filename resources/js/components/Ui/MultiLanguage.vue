<script>
export default {
    name: "MultiLanguage",

    data() {
        return {
            languages: [
            {
                code: "Ru",
                name: "Русский",
                image: "image/local/ru.svg",
            },
            {
                code: "En",
                name: "English",
                image: "image/local/en.svg",
            },
            {
                code: "tm",
                name: "Español",
                image: "image/local/tm.svg",
            }],
        };
    },

    methods: {

        swapLanguages(index) {
            const temp = this.languages[0];
            this.languages[0] = this.languages[index];
            this.languages[index] = temp;
        },
    },
};
</script>

<template>
    <div class="language-switcher">
        <button class="lang-btn" aria-label="Выбрать язык" @click="swapLanguages(0)">
            <a href="#">
                <img :src="languages[0].image" :alt="languages[0].name">
                <span>{{ languages[0].code }}</span>
            </a>
        </button>
        <div class="lang-list">
            <a v-for="(language, index) in languages.slice(1)" :key="index" href="#" @click="swapLanguages(index + 1)">
                <img :src="language.image" :alt="language.name">
                <span>{{ language.code }}</span>
            </a>
        </div>
    </div>
</template>

<style scoped>
.language-switcher {
  position: relative;
  display: inline-block;
}

.lang-btn {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: #333;
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  transition: all 0.2s ease-in-out;
}

.lang-btn:hover {
  color: #000;
  background-color: #fff;
}

.lang-btn img {
  width: 24px;
  height: 16px;
  margin-right: 5px;
}

.lang-btn span {
  font-size: 16px;
}

.lang-list {
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  z-index: 1;
  display: none;
  list-style: none;
  padding: 0;
  margin: 0;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  transform-origin: top center;
  transition: transform 0.2s ease-in-out;
}

.lang-list a {
  display: flex;
  align-items: center;
  padding: 10px;
  text-decoration: none;
  color: #333;
}

.lang-list a:hover {
  color: #000;
  background-color: #f7f7f7;
}

.lang-list img {
  width: 24px;
  height: 16px;
  margin-right: 5px;
}

.lang-list span {
  font-size: 16px;
}

.language-switcher:hover .lang-list {
  display: block;
  transform: translateY(-10px);
}

.lang-btn span {
  display: inline-flex;
  align-items: center;
}

.lang-switcher-list a.active {
  color: #fff;
  background-color: #000;
}

</style>

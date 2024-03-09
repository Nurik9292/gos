<script>
export default {
    name: "MultiLanguage",
}
</script>

<template>
<div class="language-switcher">
  <button class="lang-btn" aria-label="Выбрать язык">
    <a href="#">
      <img src="image/local/ru.svg" alt="Русский">
      <span>Ru</span>
    </a>
  </button>
  <div class="lang-list">
    <a href="#">
      <img src="image/local/en.svg" alt="English">
      <span>En</span>
    </a>
    <a href="#">
      <img src="image/local/tm.svg" alt="Español">
      <span>Tm</span>
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
  background-color: #f7f7f7;
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

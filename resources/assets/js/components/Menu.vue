<template>
  <div class="menu">
      <a class="menu-item btn btn-default" href="/create">Create</a>
      <a class="menu-item btn btn-default" href="/">List</a>
  </div>
</template>

<script>
    export default {
        ready() {
            console.log('Menu component ready.')
        }
    }
</script>

<style>
.menu {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-around;
}

.menu-item {
    padding: 3em;
    border-bottom: none;
}

</style>

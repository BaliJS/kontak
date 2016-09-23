<template>
  <div class="btn-group">
      <a class="menu-item btn btn-success btn-ghost" href="/people/create">Create</a>
      <a class="menu-item btn btn-success btn-ghost" href="/people">List</a>
  </div>
</template>

<script>
    export default {
        ready() {
            console.log('Menu component ready.')
        }
    }
</script>

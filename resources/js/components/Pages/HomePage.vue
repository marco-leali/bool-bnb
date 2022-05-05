<template>
<div>
    <Jumbotron />
    <SectionPartner />
    <SectionBestApartments />
    <SectionDescription />
    <SectionSubscribe />

</div>
</template>

<script>
import Jumbotron from '../Jumbotron.vue';
import SectionPartner from '../SectionPartner.vue';
import SectionBestApartments from '../SectionBestApartments.vue';
import SectionDescription from '../SectionDescription.vue';
import SectionSubscribe from '../SectionSubscribe.vue';

export default {
    name:"HomePage",
    components: {
        Jumbotron,
        SectionPartner,
        SectionBestApartments,
        SectionDescription,
        SectionSubscribe
        
    }
}
</script>

<style scoped lang="scss">

</style>
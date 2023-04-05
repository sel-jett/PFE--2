<template>
    <h1 class="text-3xl font-semibold my-8 text-center dark:text-white">Why <span class="text-blue-600">N</span>AJA7I?</h1>
    <div class="w-1/2 m-auto pt-1 mb-4 w-3/4 sm:w-2/3 lg:w-1/2">
        <Accordion title="What kinds of courses do you offer?">
            We offer a wide range of courses covering various topics, such as Philosphy, life and earth Sciences, Maths, Physics, and more. You can browse our <Link class="text-blue-600" :href="route('course.index')">catalog</Link> to find the courses that interest you the most.
        </Accordion>
        <Accordion title="Who are the instructors teaching the courses?">
            Our courses are taught by experienced instructors with real-world knowledge and expertise in their respective fields. They are selected through a rigorous screening process to ensure that you receive the highest quality instruction.
        </Accordion>
        <Accordion title="How much do the courses cost?">
            The cost of each course varies depending on the topic, length, and complexity of the course. You can find the pricing information for each course on our website.
        </Accordion>
        <Accordion title="Are there any prerequisites for taking a course?">
            Some courses may have prerequisites, such as prior knowledge or experience in a particular subject area. You can find the prerequisites for each course on the course description page.
        </Accordion>
        <Accordion title="Can I enroll in multiple courses at the same time?">
            Yes, you can enroll in multiple courses at the same time. However, we recommend that you carefully consider your availability and workload before enrolling in multiple courses.
        </Accordion>
        <Accordion title="Are there any discounts or promotions available?"> 
            Yes, we occasionally offer discounts and promotions on our courses. You can check our website or subscribe to our newsletter to stay up-to-date on any ongoing promotions.
        </Accordion>
        <Accordion title="How do I pay for a course?">
            You can pay for a course using a credit card or PayPal. We also offer flexible payment options, such as installment plans, for some courses.
        </Accordion>
        <Accordion title="Are there any restrictions on where I can take the course from?">
            No, there are no geographical restrictions on where you can take our courses from. You can access our courses from anywhere in the world with an internet connection.
        </Accordion>
        <Accordion title="How do I get started with taking a course?">
            To get started with taking a course, simply browse our catalog and select the course you're interested in. Then, follow the enrollment process and start learning!
        </Accordion>
    </div>
  </template>

  <script setup> 
        import { Link } from '@inertiajs/inertia-vue3';
    </script>
  
  <script>
  import Accordion from './components/Accordion.vue'
  export default {
    name: 'App',
    components: {
      Accordion
    }
  }
  </script>
 
# CD demo
A project to demonstrate a deployment pipeline as described in Humble &amp; Farley's Continuous Delivery

(c) Barney Laurance 2021

My plan is to create a minimal PHP web app, and a delivery pipeline to deploy it. 
The pipeline should as much as practicable faithfully follow patterns and terminology
given in sources such as [Continuous Delivery](https://www.goodreads.com/book/show/8686650-continuous-delivery) by Jez Humble and David Farley, and [ Continuous Delivery Pipelines - How to Build Better Software Faster ](https://www.goodreads.com/en/book/show/56771495-continuous-delivery-pipelines---how-to-build-better-software-faster) by Dave Farley.

A relevant chapter of Continous Delivery is freely available: [Continuous Delivery: Anatomy of the Deployment Pipeline](https://www.informit.com/articles/article.aspx?p=1621865).

The pipeline will be run using CircleCI.

Expected problems:

- **What to put in the actual application** - needs to be simple enough not to distract
  too much from the pipeline, but complicated enough to be possible to meaningfully
  test, and not collect any personally identifiable information for me to be 
  responsible for. Potentially I could compensate for its simplicity by adding some
  artificial delays to automated checks.

- **How to orchestrate the commit stage** - circleCI doesn't seem to offer a nice way to support the pattern given in the books, where only one version is ever being acceptance-tested at any one time, and if many versions pass the commit stage in quick
 succession only the first and last are acceptance tested, and the in-between versions
 are ignored.

- **Where to deploy the site to**


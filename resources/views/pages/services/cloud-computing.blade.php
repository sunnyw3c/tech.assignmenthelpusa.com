@extends('layouts.app')

@section('title', 'Cloud Computing Services | AWS, GCP, Azure & DevOps - Tech Solution')
@section('meta_description', 'Expert cloud computing services — AWS, Google Cloud, Azure infrastructure setup, DevOps CI/CD pipelines, Kubernetes, containerization, cloud migration, and 24/7 monitoring for businesses worldwide.')
@section('canonical', url('/services/cloud-computing'))

@push('head')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "Service",
  "@@id": "{{ url('/services/cloud-computing') }}#cloud-computing-service",
  "name": "Cloud Computing & DevOps Services",
  "provider": {
    "@@type": "Organization",
    "name": "Tech Solution",
    "url": "{{ url('/') }}"
  },
  "serviceType": [
    "Cloud Computing Services",
    "AWS Infrastructure Setup",
    "Google Cloud Platform Services",
    "Azure Cloud Services",
    "DevOps CI/CD Pipeline",
    "Cloud Migration",
    "Kubernetes & Docker Containerization",
    "Cloud Cost Optimization"
  ],
  "description": "Tech Solution delivers end-to-end cloud computing and DevOps services including AWS, GCP, and Azure infrastructure setup, Kubernetes orchestration, CI/CD automation, cloud migration, containerization, and 24/7 monitoring for businesses that need reliable, scalable, and secure cloud infrastructure.",
  "areaServed": ["United States", "United Kingdom", "United Arab Emirates", "India", "Singapore"]
}
</script>
@endpush

@section('content')

{{-- 1. HERO SECTION --}}
<!-- 1. FUTURISTIC HOLOGRAPHIC HERO SECTION -->
<section class="hero-futuristic-container w-full z-10 theme-amber">
  <div class="hero-glow-blob-1"></div>
  <div class="hero-glow-blob-2"></div>
  <div class="hero-glow-blob-3"></div>

  <div class="hero-futuristic-grid">
    <!-- Left Side: Marketing Content -->
    <div class="flex flex-col justify-center text-left max-w-2xl mx-auto lg:mx-0">
      <nav class="breadcrumb-nav mb-4" aria-label="Breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span class="sep">/</span>
        <span class="current text-amber-400">Cloud & DevOps</span>
      </nav>

      <div class="flex justify-center lg:justify-start">
        <span class="trust-pill">
          <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
          Auto-Scaling & 99.99% SLA Uptime
        </span>
      </div>

      <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-white leading-tight mb-6 text-center lg:text-left">
        Cloud Services & DevOps on <span class="text-gradient">AWS, GCP & Azure</span>
      </h1>

      <p class="text-sm sm:text-base text-slate-300 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0 text-center lg:text-left">
        Businesses can build servers through basic hostings or internal staff. Tech Solution is the DevOps partner for cloud systems requiring Kubernetes clusters, automated CI/CD code releases, and auto-scaling clusters.
      </p>

      <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
        <a href="#contact" class="w-full sm:w-auto btn-futuristic-primary text-center justify-center">
          <span>Discuss My Cloud Project</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
        </a>
        <a href="#buyer-guide" class="w-full sm:w-auto btn-futuristic-secondary text-center justify-center">
          <span>Compare Options</span>
        </a>
      </div>
    </div>

    <!-- Right Side: 3D Isometric Cloud Stack -->
    <div class="isometric-stack-container">
      <!-- Floating Technology Chips -->
      <span class="tech-chip" id="chip-laravel">AWS</span>
      <span class="tech-chip" id="chip-react">Docker</span>
      <span class="tech-chip" id="chip-vite">K8s</span>
      <span class="tech-chip" id="chip-tailwind">Actions</span>

      <!-- 3D Perspective Viewport -->
      <div class="isometric-stack-viewport">
        <!-- Connecting Vertical Lasers (Standing perpendicular in 3D) -->
        <div class="connector-line connector-line-1"></div>
        <div class="connector-line connector-line-2"></div>
        <div class="connector-line connector-line-3"></div>
        <div class="connector-line connector-line-4"></div>

        <!-- 1. Frontend Layer (Top) - Traffic Controller / LB -->
        <div class="stack-layer layer-frontend flex flex-col justify-between">
          <!-- Glassmorphism LB Header -->
          <div class="flex items-center justify-between border-b border-cyan-400/20 pb-1.5 mb-2">
            <span class="text-[8px] font-bold text-white tracking-wider font-sans">Nginx Load Balancer</span>
            <div class="bg-slate-950/50 text-[6px] text-cyan-400 px-2 py-0.5 rounded border border-cyan-500/20 font-mono">
              HTTPS: Active
            </div>
          </div>
          <!-- Traffic grid -->
          <div class="flex-1 flex gap-2">
            <div class="w-1/3 bg-slate-950/40 rounded p-1 flex flex-col justify-between border border-slate-800/50">
              <span class="text-[6px] text-cyan-400 font-bold uppercase">Requests</span>
              <div class="h-2 w-full bg-cyan-400/25 rounded"></div>
              <span class="text-[6px] text-slate-400">4,200 req/sec</span>
              <span class="text-[5px] text-emerald-400 font-mono">0.0% loss</span>
            </div>
            <div class="flex-1 bg-slate-950/30 rounded p-1.5 border border-slate-800/50 flex flex-col justify-between font-mono text-[6px] text-slate-300">
              <div class="flex justify-between items-center mb-0.5 pb-0.5 border-b border-slate-800/80">
                <span class="text-cyan-400">Traffic Distribution</span>
                <span class="text-emerald-400">Node</span>
              </div>
              <div class="flex justify-between"><span>Node_US_East_1</span><span class="text-emerald-400">40% load</span></div>
              <div class="flex justify-between"><span>Node_EU_West_1</span><span class="text-emerald-400">35% load</span></div>
              <div class="flex justify-between"><span>Node_AP_South_1</span><span class="text-emerald-400">25% load</span></div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-cyan-400/80 font-bold pt-1.5 border-t border-cyan-400/10">
            <span>TRAFFIC ROUTING NODE</span>
            <span>SSL TERMINATION PASSED</span>
          </div>
        </div>

        <!-- 2. Backend Layer (Middle) - Clusters & VMs -->
        <div class="stack-layer layer-backend flex flex-col justify-between">
          <!-- Glassmorphism Kubernetes Header -->
          <div class="flex items-center justify-between border-b border-sky-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-sky-400 font-mono">Kubernetes Cluster (k8s)</span>
            <span class="text-[7px] text-emerald-400 font-mono">ReplicaSet: 5</span>
          </div>
          <!-- Cluster Nodes Visuals -->
          <div class="flex-1 flex gap-2 items-center justify-center">
            <div class="bg-slate-950/40 p-1.5 rounded border border-slate-800/40 text-[6px] flex flex-col items-center">
              <span class="text-slate-300 font-mono">pod-app-1</span>
              <span class="text-emerald-400 font-bold font-mono">HEALTHY</span>
            </div>
            <div class="bg-slate-950/40 p-1.5 rounded border border-slate-800/40 text-[6px] flex flex-col items-center">
              <span class="text-slate-300 font-mono">pod-app-2</span>
              <span class="text-emerald-400 font-bold font-mono">HEALTHY</span>
            </div>
            <div class="bg-slate-950/40 p-1.5 rounded border border-slate-800/40 text-[6px] flex flex-col items-center">
              <span class="text-slate-300 font-mono">pod-app-3</span>
              <span class="text-emerald-400 font-bold font-mono">HEALTHY</span>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-sky-400/80 font-bold pt-1.5 border-t border-sky-400/10">
            <span>CONTAINER ORCHESTRATION</span>
            <span>AUTO-SCALE THRESHOLD: 80%</span>
          </div>
        </div>

        <!-- 3. Database Layer (Bottom) - VPC Network / AWS -->
        <div class="stack-layer layer-database flex flex-col justify-between">
          <!-- Glassmorphism VPC Network Header -->
          <div class="flex items-center justify-between border-b border-purple-400/20 pb-1.5 mb-2">
            <span class="text-[7px] text-purple-400 font-mono">Multi-Region Cloud Infrastructure</span>
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
          </div>
          <!-- Cloud Details -->
          <div class="flex-1 flex items-center justify-between gap-4">
            <!-- Region Latency Card -->
            <div class="w-1/2 bg-slate-950/50 rounded border border-purple-500/20 p-1.5 font-mono text-[6px] text-slate-400 leading-tight flex flex-col justify-between">
              <div class="flex justify-between border-b border-purple-500/10 pb-0.5 mb-1"><span class="text-purple-400">AWS REGION</span><span class="text-purple-300">PING</span></div>
              <div class="flex justify-between"><span>us-east-1:</span><span class="text-emerald-400">8ms</span></div>
              <div class="flex justify-between"><span>eu-west-1:</span><span class="text-emerald-400">14ms</span></div>
              <div class="flex justify-between"><span>ap-south-1:</span><span class="text-emerald-400">22ms</span></div>
            </div>
            <!-- DevOps tools -->
            <div class="flex-1 flex flex-col gap-1 items-center justify-center">
              <span class="text-[7px] text-purple-400 font-bold tracking-wider uppercase">CI/CD Deploy</span>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">deploy_prod.yml</div>
              <div class="px-2 py-0.5 rounded bg-purple-500/10 border border-purple-400/30 text-[6px] text-purple-300 font-bold font-mono">STATUS: SUCCESS</div>
            </div>
          </div>
          <!-- Footer Status -->
          <div class="flex items-center justify-between text-[7px] text-purple-400/80 font-bold pt-1.5 border-t border-purple-400/10">
            <span>SECURE VPC NETWORK</span>
            <span>24/7 CLOUD WATCHING RUNNING</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 2. BUYER GUIDE --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-amber-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Buyer Guide
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Who Provides Cloud Computing Services?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      The right cloud partner depends on how complex your infrastructure is, which platforms you use, and whether you need a one-time migration or ongoing DevOps engineering and monitoring support.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">In-House Cloud Teams</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Larger enterprises build internal DevOps teams for continuous infrastructure work. Requires hiring certified cloud engineers and maintaining skills across rapidly evolving AWS, GCP, and Azure services.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Managed Service Providers</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        MSPs offer standardized cloud hosting and monitoring packages. Best for businesses that want predictable costs with limited need for custom infrastructure or bespoke CI/CD pipelines.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Cloud Platform Partners</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Official AWS, GCP, or Azure partners specialise in their respective platform. Ideal when you are locked into one cloud provider and need deep certification-backed configuration and support.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <h3 class="font-heading text-lg font-bold text-white mb-2">Full-Service Cloud Agencies</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Agencies design multi-cloud architecture, automate deployments, containerize workloads, migrate legacy systems, and provide ongoing monitoring — across any combination of AWS, GCP, and Azure.
      </p>
    </div>
  </div>
</section>

{{-- 3. WHAT OUR SERVICE INCLUDES --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-[11px] font-bold uppercase tracking-wider border border-amber-500/20 mb-3 inline-block">
      Tech Solution Delivery
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      What Our Cloud Computing Service Includes
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We design, build, and operate cloud infrastructure for businesses that need more than a shared hosting plan — scalable architecture, automated deployments, container orchestration, and proactive monitoring across AWS, GCP, and Azure.
    </p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 001-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Cloud Infrastructure Setup & Architecture</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        End-to-end cloud environment design on AWS (EC2, RDS, S3, Lambda), Google Cloud (GKE, Cloud Run, BigQuery), or Azure (App Service, AKS, Blob Storage) — with VPC configuration, security groups, IAM policies, and auto-scaling rules built in from day one.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-orange-500/10 border border-orange-500/20 flex items-center justify-center text-orange-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">CI/CD Pipeline Automation</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Fully automated build, test, and deployment pipelines using GitHub Actions, GitLab CI, Jenkins, or CircleCI — with environment-specific deployments (dev, staging, production), rollback strategies, blue-green deployments, and deployment notifications.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-sky-500/10 border border-sky-500/20 flex items-center justify-center text-sky-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Docker & Kubernetes Containerization</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Application containerization with Docker, Kubernetes cluster setup (EKS, GKE, AKS), Helm chart management, horizontal pod autoscaling, ingress configuration, persistent volume management, and namespace-based environment isolation.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Cloud Migration</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        Lift-and-shift, re-platforming, and re-architecting migrations from on-premise servers, shared hosting, or legacy cloud environments to modern AWS, GCP, or Azure — with zero-downtime cutover plans, data validation, and post-migration performance tuning.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-purple-500/10 border border-purple-500/20 flex items-center justify-center text-purple-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Cloud Security & Compliance</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        IAM role hardening, secrets management (AWS Secrets Manager, HashiCorp Vault), network security groups, SSL/TLS certificate automation, vulnerability scanning, WAF configuration, and compliance-ready infrastructure for GDPR, HIPAA, and SOC 2 requirements.
      </p>
    </div>
    <div class="glass-card rounded-2xl p-6">
      <div class="w-10 h-10 rounded-xl bg-rose-500/10 border border-rose-500/20 flex items-center justify-center text-rose-400 mb-4">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
      </div>
      <h3 class="font-heading text-lg font-bold text-white mb-2">Monitoring, Alerts & Cost Optimization</h3>
      <p class="text-slate-400 text-xs leading-relaxed">
        24/7 infrastructure monitoring with CloudWatch, Datadog, Grafana, or Prometheus — custom dashboards, uptime alerts, error-rate thresholds, log aggregation, and monthly cloud cost analysis with rightsizing recommendations to reduce your AWS/GCP/Azure bill.
      </p>
    </div>
  </div>
</section>

{{-- 4. PLATFORMS & TOOLS --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-amber-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Tech Stack
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Cloud Platforms & DevOps Tools We Work With
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed">
      We are platform-agnostic — we recommend and work with whichever cloud and DevOps tools best match your existing stack, team skills, and long-term cost profile.
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-amber-400 inline-block"></span>
        Amazon Web Services (AWS)
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">EC2, RDS, S3, Lambda, CloudFront, EKS, Elastic Beanstalk, Route 53, Secrets Manager, CloudWatch, and SQS/SNS event-driven architecture.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-sky-400 inline-block"></span>
        Google Cloud Platform (GCP)
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">GKE, Cloud Run, Cloud SQL, BigQuery, Cloud Storage, Pub/Sub, Firebase, Vertex AI, Cloud Functions, and Google Load Balancing.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-blue-400 inline-block"></span>
        Microsoft Azure
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Azure App Service, AKS, Azure SQL, Blob Storage, Azure Functions, API Management, Azure DevOps, Active Directory, and Azure Monitor.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block"></span>
        Containers & Orchestration
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Docker, Kubernetes, Helm, Docker Compose, containerd, Podman, and service mesh tools including Istio and Linkerd for microservices communication.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-purple-400 inline-block"></span>
        CI/CD & Automation
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">GitHub Actions, GitLab CI/CD, Jenkins, CircleCI, Terraform, Ansible, and Pulumi for infrastructure-as-code and fully automated deployment pipelines.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-rose-400 inline-block"></span>
        Monitoring & Observability
      </h3>
      <p class="text-slate-400 text-xs leading-relaxed">Datadog, Grafana, Prometheus, ELK Stack (Elasticsearch, Logstash, Kibana), PagerDuty, Sentry, and AWS CloudWatch for end-to-end visibility.</p>
    </div>
  </div>
</section>

{{-- 5. DELIVERY PROCESS --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      <div class="lg:col-span-4">
        <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-300 text-[11px] font-bold uppercase tracking-wider border border-amber-500/20 mb-3 inline-block">
          Delivery Process
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          How We Deliver Cloud Infrastructure
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Every cloud project starts with understanding your workloads, growth trajectory, and team constraints — so the architecture we build today doesn't become a problem six months after launch.
        </p>
      </div>
      <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-amber-400">01</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Infrastructure Audit & Discovery</h3>
          <p class="text-slate-400 text-xs leading-relaxed">We assess your current setup, workload patterns, traffic profiles, cost structure, security posture, and team capabilities to define the right cloud architecture and migration or build strategy.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-orange-400">02</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Architecture Design & IaC</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Cloud architecture diagrams, infrastructure-as-code using Terraform or Pulumi, environment separation, networking design, and security policy definitions — reviewed with your team before provisioning begins.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-sky-400">03</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Build, Deploy & Automate</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Environment provisioning, container builds, CI/CD pipeline setup, staging environment validation, security hardening, performance benchmarking, and go-live checklist completion before production cutover.</p>
        </div>
        <div class="glass-card rounded-2xl p-5">
          <span class="text-[10px] font-bold uppercase text-emerald-400">04</span>
          <h3 class="font-heading text-lg font-bold text-white mt-1 mb-2">Monitor, Optimise & Support</h3>
          <p class="text-slate-400 text-xs leading-relaxed">Post-launch monitoring setup, alert thresholds, log aggregation, monthly cost reviews, rightsizing recommendations, and an ongoing support retainer for infrastructure changes and incident response.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 6. BEST FIT --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="glass-panel rounded-2xl p-6 sm:p-8 border border-slate-700/80 shadow-xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
      <div class="lg:col-span-5">
        <span class="px-3 py-1 rounded-full bg-orange-500/10 text-orange-300 text-[11px] font-bold uppercase tracking-wider border border-orange-500/20 mb-3 inline-block">
          Best Fit
        </span>
        <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
          Choose Tech Solution When Your Infrastructure Must Scale Without Surprises
        </h2>
        <p class="text-slate-400 text-sm leading-relaxed">
          Our strongest fit is when you need cloud infrastructure that handles real production traffic reliably, deploys automatically with every code push, and costs what it should — without requiring your developers to become cloud engineers.
        </p>
      </div>
      <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-3">
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">SaaS & Web Application Teams</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Auto-scaling cloud infrastructure, managed database clusters, CDN setup, containerized deployments, and CI/CD pipelines so developers ship code without touching servers.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">eCommerce & High-Traffic Sites</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Auto-scaling groups, load balancers, CDN with edge caching, database read replicas, peak traffic planning, and zero-downtime deployment strategies for sale events.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Businesses Leaving Shared Hosting</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Structured migration from cPanel, shared hosting, or underpowered VPS to production-grade cloud environments with monitoring, backups, and proper security from day one.</p>
        </div>
        <div class="rounded-xl border border-slate-700/80 bg-slate-900/60 p-4">
          <h3 class="text-sm font-bold text-white mb-1">Startups Scaling Fast</h3>
          <p class="text-xs text-slate-400 leading-relaxed">Cloud architecture that starts small and scales horizontally — with cost controls, alerting, and infrastructure-as-code so your team can grow the system without rebuilding it.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- 7. FAQ --}}
<section class="py-8 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="mb-6 max-w-3xl">
    <span class="px-3 py-1 rounded-full bg-slate-800/80 text-amber-300 text-[11px] font-bold uppercase tracking-wider border border-slate-700 mb-3 inline-block">
      Common Questions
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">
      Cloud Computing Services — Frequently Asked Questions
    </h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Which cloud platform should we use — AWS, GCP, or Azure?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">It depends on your tech stack, existing tools, and team familiarity. AWS has the broadest service range and market share. GCP excels for data, AI, and Kubernetes workloads. Azure is the natural fit for Microsoft-stack businesses. We can advise and work with all three — or a multi-cloud setup if required.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Can you migrate our existing server or hosting to the cloud?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. We handle migrations from on-premise servers, shared hosting (cPanel, Plesk), unmanaged VPS, and legacy cloud environments. We plan the migration in stages — starting with a staging environment clone — so there is no data loss and minimal downtime during the production cutover.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">What is infrastructure-as-code and do we need it?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Infrastructure-as-code (IaC) means your cloud environment is defined in code files (Terraform, Pulumi) rather than clicked together in a console. This makes infrastructure reproducible, version-controlled, auditable, and deployable in minutes — essential for any team that needs to spin up staging environments or recover from failures quickly.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">How do you keep cloud costs under control?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">We implement resource tagging, budget alerts, auto-scaling policies, and monthly cost reviews from the start. We use reserved instances or committed use discounts where appropriate, right-size underutilized resources, and identify idle services. Most clients see 20–40% cost reduction after an infrastructure review.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Can you set up a CI/CD pipeline for our development team?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. We set up fully automated pipelines using GitHub Actions, GitLab CI, or Jenkins — with automated testing, build steps, staging deployment, manual approval gates, and production deployment. Developers push code; the pipeline handles the rest, including rollbacks if something fails.</p>
    </div>
    <div class="glass-card rounded-2xl p-5">
      <h3 class="font-heading text-base font-bold text-white mb-2">Do you provide ongoing cloud support after setup?</h3>
      <p class="text-slate-400 text-xs leading-relaxed">Yes. We offer monthly cloud support retainers covering infrastructure changes, incident response, security patching, cost reviews, capacity planning, and pipeline updates. You get a dedicated team that knows your environment — not a generic helpdesk ticket queue.</p>
    </div>
  </div>
</section>

{{-- 8. CONTACT CTA --}}
<section id="contact" class="py-8 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto relative z-10 scroll-mt-20">
  <div class="glass-panel rounded-2xl p-6 sm:p-10 border border-amber-500/20 shadow-xl text-center">
    <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-400 text-[11px] font-bold uppercase tracking-wider border border-amber-500/20 mb-4 inline-block">
      Start Your Project
    </span>
    <h2 class="font-heading text-2xl sm:text-3xl font-bold text-white mb-3">
      Ready to Move to Reliable Cloud Infrastructure?
    </h2>
    <p class="text-slate-400 text-sm leading-relaxed mb-6 max-w-xl mx-auto">
      Tell us about your current setup, traffic levels, and goals. We will outline a cloud architecture plan and delivery timeline that fits your team and budget.
    </p>
    <a href="{{ url('/#contact') }}" class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-gradient-to-r from-amber-400 to-orange-500 text-slate-950 font-bold text-sm shadow-lg hover:scale-105 transition-all">
      Get a Free Cloud Consultation
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7-7 7M3 12h18" /></svg>
    </a>
  </div>
</section>

{{-- Related Services Section --}}
<section class="py-10 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto relative z-10">
  <div class="text-center mb-6">
    <p class="text-xs font-bold uppercase tracking-widest text-amber-400 mb-1">Explore More</p>
    <h2 class="font-heading text-xl sm:text-2xl font-bold text-white">Services That Work Best Together</h2>
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <a href="{{ url('/services/web-development') }}" class="related-service-card group">
      <p class="rs-label text-sky-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
        Web Development →
      </p>
      <p class="rs-desc">Deploy your custom Laravel website or web app on cloud infrastructure built for speed, security, and scale.</p>
    </a>
    <a href="{{ url('/services/ai-automation') }}" class="related-service-card group">
      <p class="rs-label text-violet-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2h-2" /></svg>
        AI Automation →
      </p>
      <p class="rs-desc">Run AI pipelines, LLM inference, and intelligent workflow automation at scale on your cloud environment.</p>
    </a>
    <a href="{{ url('/services/odoo-erp') }}" class="related-service-card group">
      <p class="rs-label text-emerald-400">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
        Odoo ERP →
      </p>
      <p class="rs-desc">Host your Odoo ERP instance on managed cloud with automated backups, uptime SLA, and zero-downtime deployments.</p>
    </a>
  </div>
</section>

@include('components.calculators.cloud-calculator')

@endsection

 <div class="course-card course-card-transition bg-white border border-outline-variant/40 rounded-xl overflow-hidden shadow-sm hover:shadow-xl hover:border-secondary-500 flex flex-col justify-between"
     data-category="business">
     <div>
         <div class="relative h-40 w-full overflow-hidden bg-surface-container">
             <img alt="BSB50420 Diploma of Leadership and Management"
                 class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                 src="{{ asset($qualification['image']) }}" />
             <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent">
             </div>
             <div
                 class="absolute top-3 left-3 bg-white/95 px-2 py-0.5 rounded shadow-sm text-xs font-bold text-primary font-heading">
                 {{$qualification['code']}}
             </div>
             <div class="absolute top-3 right-3 bg-secondary-500 text-white px-2 py-0.5 rounded text-[11px] font-semibold">
                 {{$qualification['aqf_level']}}
             </div>
         </div>
         <div class="p-5">
             <h3 class="font-heading text-base font-bold text-primary mb-1.5">
                {{$qualification['title']}}
             </h3>
             <p class="text-xs text-on-surface-variant mb-3 line-clamp-2">
                 {{$qualification['description']}}
             </p>
             <div class="flex flex-wrap gap-1.5">
                 <span
                     class="inline-flex items-center gap-1 text-[11px] text-secondary-800 bg-surface-container px-2 py-0.5 rounded font-medium"><span
                         class="material-symbols-outlined text-xs!">laptop_mac</span>
                     Online &amp; Blended</span>
                 <span
                     class="inline-flex items-center gap-1 text-[11px] text-secondary-800 bg-surface-container px-2 py-0.5 rounded font-medium"><span
                         class="material-symbols-outlined text-xs!">psychology</span>
                     RPL Available</span>
             </div>
         </div>
     </div>
     <div class="p-4 pt-0 flex items-center justify-between gap-4  mt-auto">
         <a class="flex-1 py-2 px-3 bg-surface-container-low hover:bg-surface-container text-primary text-xs font-semibold rounded-lg text-center transition-colors"
             href="#eligibility-checker">View Course</a>
         <a class="flex-1 py-2 px-3 bg-primary hover:bg-primary-dark text-white text-xs font-semibold rounded-lg text-center transition-colors shadow-sm"
             href="#eligibility-checker">Check Eligibility</a>
     </div>
 </div>

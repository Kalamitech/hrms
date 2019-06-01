@extends('layouts.master.admin')

@section('page-title')
    Company Policy
@endsection


@section('content-body')
    <div class="row">
        <div class="col-12">
            <div id="accordionWrap01" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <h3 style="text-align: center; margin-bottom:25px; margin-top: 15px;">Company Policies</h3>

                    <div id="heading01" class="card-header text-left">
                        <a data-toggle="collapse" href="#accordion01" aria-expanded="true" aria-controls="accordion01" class="card-title lead">Employee Conduct Policy</a>
                    </div>
                    <div id="accordion01" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading01" class="collapse show">
                        <div class="card-content">
                            <div class="card-body">
                                    Equal opportunity laws are rules that promote fair treatment in the workplace. Most organizations implement equal opportunity policies – anti-discrimination and affirmative action policies, for example – to encourage unprejudiced behavior within the workplace. These policies discourage inappropriate behavior from employees, supervisors and independent contractors in regard to the race, gender, sexual orientation or religious and cultural beliefs of another person within the organization.
                            </div>
                        </div>
                    </div>
                    <div id="heading02" class="card-header text-left">
                        <a data-toggle="collapse" href="#accordion02" aria-expanded="false" aria-controls="accordion02" class="card-title lead collapsed">Equal Opportunity Policy</a>
                    </div>
                    <div id="accordion02" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading02" class="collapse" aria-expanded="false">
                        <div class="card-content">
                            <div class="card-body">
                                Attendance policies set rules and guidelines surrounding employee adherence to work schedules. Attendance policies define how employees may schedule time off or notify superiors of an absence or late arrival. This policy also sets forth the consequences for failing to adhere to a schedule. For example, employers may allow only a certain number of absences within a specified time frame. The attendance policy discusses the disciplinary action employees face if they miss more days than the company allows.
                            </div>
                        </div>
                    </div>
                    <div id="heading03" class="card-header text-left">
                        <a data-toggle="collapse" href="#accordion03" aria-expanded="false" aria-controls="accordion03" class="card-title lead collapsed">Attendance and Time Off Policy</a>
                    </div>
                    <div id="accordion03" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading03" class="collapse" aria-expanded="false">
                        <div class="card-content">
                            <div class="card-body">
                                Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate
                                bar chocolate cake cupcake chocolate topping. Dessert jelly beans toffee muffin tiramisu sesame snaps brownie.
                                Cake halvah pastry soufflé oat cake candy candy canes. Lemon drops gummies gingerbread toffee. Tart jelly candy
                                pastry. Pastry cake jelly beans carrot cake marzipan lollipop muffin. Soufflé jujubes cupcake. Powder danish
                                candy carrot cake pastry. Tart marshmallow caramels cake macaroon gummies lollipop.
                            </div>
                        </div>
                    </div>
                    <div id="heading04" class="card-header text-left">
                        <a data-toggle="collapse" href="#accordion04" aria-expanded="false" aria-controls="accordion04" class="card-title lead collapsed">Substance Abuse Policy</a>
                    </div>
                    <div id="accordion04" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading04" class="collapse" aria-expanded="false" style="height: 0px;">
                        <div class="card-content">
                            <div class="card-body">
                                    Many companies have substance abuse policies that prohibit the use of drugs, alcohol and tobacco products during work hours, on company property or during company functions. These policies often outline smoking procedures employees must follow if allowed to smoke on business premises. Substance abuse policies also discuss the testing procedures for suspected drug and alcohol abuse
                            </div>
                        </div>
                    </div>
                    <div id="heading05" class="card-header text-left">
                            <a data-toggle="collapse" href="#accordion05" aria-expanded="false" aria-controls="accordion05" class="card-title lead collapsed">Workplace Security Policy</a>
                        </div>
                        <div id="accordion05" role="tabpanel" data-parent="#accordionWrap01" aria-labelledby="heading05" class="collapse" aria-expanded="false" style="height: 0px;">
                            <div class="card-content">
                                <div class="card-body">
                                        Policies on security are in place to protect not only the people in an organization, but the physical and intellectual property as well. Policies may cover entrance to a facility, such as the use of ID cards and the procedures for signing in a guest. Equipment such as a company laptop or smartphone may need to be signed out.
                                        <br><br>
                                        Computer security is a high priority for firms these days. Policies cover a variety of topics, such as the frequency for changing passwords, reporting phishing attempts and log-on procedures. Use of personal devices, such as a USB drive you bring from home, may also be restricted to prevent to unintended spread of computer viruses and other malware.
                                </div>
                            </div>
                        </div>
                
                    <div><br><br></div>

                </div>
            </div>
        </div>
    </div>
@endsection

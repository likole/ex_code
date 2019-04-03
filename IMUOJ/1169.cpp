#include<iostream>
#include<iomanip>
const double PI = 3.1415;
using namespace std;
int main()
{
	double r;
	while (cin>>r)
	{
		cout <<fixed<<setprecision(3)<< PI*r*r*r * 4 / 3<<endl;
	}
}
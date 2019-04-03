#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	float m, n,s=0;
	cin >> m >> n;
	for ( int i = 0; i < n; i++)
	{
		s += m;
		m /= 2;
		s += m;
	}
	s -= m;
	cout <<fixed<<setprecision(2)<< m<<" " << s << endl;



	//cin.get();
	//cin.get();
	return 0;
}
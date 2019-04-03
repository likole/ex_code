#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int a, b, c;
	cin >> a >> b >> c;
	int suma=0, sumb=0;
	float sumc = 0;
	for (int i = 1; i <=a; i++)
	{
		suma += i;
	}
	for (int j = 1; j <= b; j++)
	{
		sumb += (j*j);
	}
	for (int k = 1; k <= c; k++)
	{
		sumc += (float)1 / k;
	}
	cout << fixed << setprecision(2) << suma + sumb + sumc<<endl;
	//cin.get();
	//cin.get();//cf
	return 0;
}
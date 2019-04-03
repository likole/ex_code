#include<iostream>
using namespace std;
int isPrime(long long int n)
{
	if (n == 2 || n == 3) return 1;
	if (n % 6 != 1 && n % 6 != 5) return 0;
	for (long long int i = 5; i*i <n ; i+=6)
	{
		if (n % i == 0||n%(i+2)==0) return 0;
	}
	return 1;
}
int main()
{
	long long int n;
	cin >> n;
	for (long long int i = n+1;; i++)
	{
		if (isPrime(i)) {
			cout << i<<endl;
			break;
		}
	}
}